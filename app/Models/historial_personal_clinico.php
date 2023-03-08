<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historial_personal_clinico extends Model
{
    use HasFactory;
    protected $table ='historial_personal_clinicos';
    protected $fillable = [
    
        'hipe_funcion_intestinal',
        'hipe_actividad_fisica',
        'hipe_niveles_estres',
        'hipe_bebe_alcohol',
        'hipe_fumador',
        'hipe_calidad_sueño',
        'hipe_informacion_adicional'
    ];   

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }

}
