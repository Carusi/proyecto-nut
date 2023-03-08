<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modalidad extends Model
{
    use HasFactory;
    protected $table ='modalidads';
    protected $fillable = [
    
        'mod_nombre',
       
    ];    


     //Relacion uno a muchos

    public function precio(){
        return $this->hasMany(precio::class);
    }


     //Relacion de muchos a muchos

     public function admin_servicios(){
        return $this->belongsToMany(admin_servicio::class);
    }
}
