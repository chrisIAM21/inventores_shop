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
    protected $fillable = ['marca', 'modelo', 'color', 'stock'];

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

    // Accessors
    public function getMarcaAttribute($value)
    {
        return ucfirst($value);
    }
    public function getModeloAttribute($value)
    {
        return strtoupper($value);
    }
    public function getColorAttribute($value)
    {
        return ucfirst($value);
    }
    
    // Mutators
    public function setMarcaAttribute($value)
    {
        $this->attributes['marca'] = ucfirst($value);
    }
    public function setModeloAttribute($value)
    {
        $this->attributes['modelo'] = strtoupper($value);
    }
    public function setColorAttribute($value)
    {
        $this->attributes['color'] = ucfirst($value);
    }
}