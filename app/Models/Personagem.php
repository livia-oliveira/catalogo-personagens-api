<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'origem',
        'descricao',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
