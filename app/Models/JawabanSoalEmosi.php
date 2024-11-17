<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanSoalEmosi extends Model
{
    use HasFactory;
    protected $table = 'jawaban_soal_emosi';
    protected $fillable = ['user_id', 'kategori_emosi', 'id_detail_jawaban'];
    public function detailJawaban()
    {
        return $this->hasOne(DetailJawaban::class);
    }

    public function user ()
    {
    return $this->belongsTo(User::class, 'user_id');
    }


}
