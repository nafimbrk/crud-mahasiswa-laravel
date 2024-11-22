<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'nama', 'semester', 'ipk'];
    protected $primaryKey = 'nim';
    public $incrementing = false;
    public $timestamps = false;
    
    public function krs(): HasMany
    {
        return $this->hasMany(KrsModel::class, 'mahasiswa_fk', 'nim');
    }
}
