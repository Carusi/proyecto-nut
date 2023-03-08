<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia_alimentaria extends Model
{
    use HasFactory;
    protected $table ='historia_alimentarias';
    protected $fillable = [

            'hial_alimentos_rechazados',
            'hial_alimentos_favoritos',
            'hial_hora_levantarse',
            'hial_hora_acostarse',
            'hial_ingesta_agua',
            'hial_alergia_intolerancias'
    ]; 

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }
}
