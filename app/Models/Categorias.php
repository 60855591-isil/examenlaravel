<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    // Una categoría tiene muchos productos
    public function productos()
    {
        return $this->hasMany(Productos::class, 'categoria_id');
    }
}