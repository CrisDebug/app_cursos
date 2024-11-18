<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Curso extends Model
{
    use HasFactory;  
    //asigacion masiva
    //es una buena practica definir los campos permitidos
    protected $fillable = ['name','descripcion','categoria', 'slug']; 

    //metodo para asignar slug antes de crear el modelo
    public static function boot()
    {
        //boot configura el evento
        parent::boot();
        //evento creating
        static::creating(function($curso){
            //solo generar el slug si no esta definido
            if(empty($curso->slug))
            {
                $curso->slug=Str::slug($curso->name);
            }
        });

    }
    
    //propiedad restrictiva
    // protected $guarded =[];
    
    //metodo mutador
    public function name():Attribute
    {
        return attribute::make
        (
            //accesador para name
            get: fn($value) => ucwords($value),
            //mutador para atributo name
            set:function($value)
            {
                return strtolower(filter_var($value,FILTER_SANITIZE_STRING));
            }
        );
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
