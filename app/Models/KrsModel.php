<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KrsModel extends Model
{
    use HasFactory;
    protected $table = 'krs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function theMahasiswa(): BelongsTo
    {
        return $this->belongsTo(MahasiswaModel::class, 'mahasiswa_fk', 'nim');
    }
    // public function theMataKuliah(): BelongsTo {
    //     return $this->belongsTo(MataKuliahModel::class, 'matakuliah_fk', 'kode');
    // }
    public function matakuliah()
    {
        return $this->belongsTo(MataKuliahModel::class, 'matakuliah_fk', 'kode');
    }
}
