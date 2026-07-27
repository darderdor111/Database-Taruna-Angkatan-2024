<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taruna extends Model
{
    protected $table = 'taruna';
    protected $primaryKey = 'id_taruna';
    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'npt',
        'jenis_kelamin',
        'id_kelas',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }
}
