<?php

namespace App\Http\Controllers;

use App\Models\Taruna;
use App\Models\ProgramStudi;
use App\Models\Kelas;
use Illuminate\Http\Request;

class TarunaController extends Controller
{
    public function home()
    {
        $totalTaruna = Taruna::count();
        $totalProdi = ProgramStudi::count();
        $programStudiList = ProgramStudi::all();

        return view('home', compact('totalTaruna', 'totalProdi', 'programStudiList'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $prodiId = $request->input('prodi');
        $kelasId = $request->input('kelas');

        $tarunaQuery = Taruna::with('kelas.programStudi');

        if (!empty($query)) {
            $tarunaQuery->where(function($q) use ($query) {
                $q->where('nama_lengkap', 'ilike', '%' . $query . '%')
                  ->orWhere('npt', 'ilike', '%' . $query . '%');
            });
        }

        if (!empty($prodiId)) {
            $tarunaQuery->whereHas('kelas', function($q) use ($prodiId) {
                $q->where('id_prodi', $prodiId);
            });
        }

        if (!empty($kelasId)) {
            $tarunaQuery->where('id_kelas', $kelasId);
        }

        $tarunaList = $tarunaQuery->paginate(10);
        $programStudiList = ProgramStudi::all();
        $kelasList = Kelas::all();

        return view('search', compact('tarunaList', 'programStudiList', 'kelasList'));
    }

    public function detail($id)
    {
        $taruna = Taruna::with('kelas.programStudi')->findOrFail($id);

        return view('detail', compact('taruna'));
    }

    public function loginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin@gmail.com' && $password === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['auth' => 'Email atau Password salah!']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('home');
    }

    public function adminDashboard(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $query = $request->input('q');

        $totalTaruna = Taruna::count();
        $kelasList = Kelas::withCount('taruna')->orderBy('id_kelas', 'asc')->get();
        
        $tarunaQuery = Taruna::with('kelas.programStudi');

        if (!empty($query)) {
            $tarunaQuery->where(function($q) use ($query) {
                $q->where('nama_lengkap', 'ilike', '%' . $query . '%')
                  ->orWhere('npt', 'ilike', '%' . $query . '%');
            });
        }

        // Mengurutkan berdasarkan digit angka terakhir NPT secara aman menggunakan Regex PostgreSQL
        $tarunaList = $tarunaQuery
            ->orderBy('id_kelas', 'asc')
            ->orderByRaw("CAST(COALESCE((regexp_match(npt, '(\\d+)\\D*$'))[1], '0') AS INTEGER) ASC")
            ->paginate(10)
            ->withQueryString();

        return view('admin.dashboard', compact('totalTaruna', 'kelasList', 'tarunaList', 'query'));
    }

    public function adminTarunaCreate()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $programStudiList = ProgramStudi::all();
        $kelasList = Kelas::all();

        return view('admin.create', compact('programStudiList', 'kelasList'));
    }

    public function adminTarunaStore(Request $request)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $request->validate([
            'npt' => 'required|string',
            'nama_lengkap' => 'required|string',
            'gender' => 'required|in:L,P',
            'id_kelas' => 'required|exists:kelas,id_kelas',
        ]);

        Taruna::create([
            'npt' => $request->input('npt'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('gender'),
            'id_kelas' => $request->input('id_kelas'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data taruna berhasil ditambahkan.');
    }

    public function adminTarunaEdit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $taruna = Taruna::findOrFail($id);
        $programStudiList = ProgramStudi::all();
        $kelasList = Kelas::all();

        return view('admin.edit', compact('taruna', 'programStudiList', 'kelasList'));
    }

    public function adminTarunaUpdate(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $request->validate([
            'npt' => 'required|string',
            'nama_lengkap' => 'required|string',
            'gender' => 'required|in:L,P',
            'id_kelas' => 'required|exists:kelas,id_kelas',
        ]);

        $taruna = Taruna::findOrFail($id);
        $taruna->update([
            'npt' => $request->input('npt'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('gender'),
            'id_kelas' => $request->input('id_kelas'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data taruna berhasil diperbarui.');
    }

    public function adminTarunaDestroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $taruna = Taruna::findOrFail($id);
        $taruna->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data taruna berhasil dihapus.');
    }
}
