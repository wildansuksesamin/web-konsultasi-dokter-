<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJawaban extends Model
{
    use HasFactory;
    protected $table = 'detail_jawaban';
    protected $fillable = ['soal1', 'soal2', 'soal3', 'soal4', 'soal5', 'soal6'];
    public function jawabanEmosi()
    {
        return $this->belongsTo(JawabanSoalEmosi::class, 'id_detail_jawaban');
    }
}