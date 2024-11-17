<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanMateriNarkoba extends Model
{
    use HasFactory;

    protected $table = 'jawaban_materi_narkobas';
    protected $guarded = ['id'];

    public function user ()
    {
    return $this->belongsTo(User::class, 'user_id');
    }

}
