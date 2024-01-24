<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archivo extends Model
{   
    use SoftDeletes;
    protected $fillable = ['producto_id', 'hash', 'nombre', 'extension', 'mime'];
    use HasFactory;

    public function producto()
    {
        // Relacion de muchos a uno
        return $this->belongsTo(Producto::class);
    }
}
