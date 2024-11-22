<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = ['kode', 'nama', 'sks'];
    protected $primaryKey = 'kode';
    public $incrementing = false;
    public $timestamps = false;
    
    public function krs(): HasMany
    {
        return $this->hasMany(KrsModel::class, 'matakuliah_fk', 'kode');
    }
}
