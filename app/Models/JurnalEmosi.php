<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalEmosi extends Model
{
    use HasFactory;
    // protected $table = 'jurnal_emosis';
    protected $guarded = ['id'];

    public function user ()
    {
    return $this->belongsTo(User::class, 'user_id');
    }
}
