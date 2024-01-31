<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['nombre', 'color', 'stock'];

    // Relacion de muchos a muchos
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
    // Relacion de uno a muchos
    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }

    // Accessors, son los que modifican los datos al momento de mostrarlos
    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }
    public function getColorAttribute($value)
    {
        return ucfirst($value);
    }
    public function getStockAttribute($value)
    {
        return $value . ' unidades';
    }
    
    // Mutators, son los que modifican los datos antes de guardarlos en la base de datos
    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst($value);
    }
    public function setColorAttribute($value)
    {
        $this->attributes['color'] = ucfirst($value);
    }
    public function setStockAttribute($value)
    {
        $this->attributes['stock'] = $value;
    }
}