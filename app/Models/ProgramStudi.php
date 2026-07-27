<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'program_studi';
    protected $primaryKey = 'id_prodi';
    public $timestamps = false;

    protected $fillable = [
        'nama_prodi',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_prodi', 'id_prodi');
    }
}
