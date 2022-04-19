<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    #Indicador de tabla
    protected $table = 'likes';

    #Relación Muchos - Uno (Muchas imagenes tienen un usuario)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    #Relación Muchos - Uno (Muchas imagenes tienen un usuario)
    public function image()
    {
        return $this->belongsTo(Image::class, 'user_id');
    }
}
