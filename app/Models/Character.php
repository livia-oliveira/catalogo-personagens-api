<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;


class Character extends Model
{
    use HasFactory;

    protected $table = 'personagens';

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
