<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_servicio extends Model
{
    use HasFactory;
    protected $table ='admin_servicios';
    protected $fillable = [
    
        'adse_nombre',
        'adse_descripcion'

    ];   

     //Relacion uno a muchos inversa

     public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function estado_cita(){
        return $this->belongsTo(estado_cita::class);
    }

     //Relacion de muchos a muchos

     public function modalidads(){
        return $this->belongsToMany(modalidad::class);
    }

    public function usuarios(){
        return $this->belongsToMany(User::class);
    }
}
