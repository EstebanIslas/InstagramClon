<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    #Indicador de tabla
    protected $table = 'images';

    #Relación Uno - Muchos (Una imagen tiene muchos comentarios)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    #Relación Uno - Muchos (Una imagen tiene muchos likes)
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    #Relación Uno - Muchos (Una imagen tiene muchos likes)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
