<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medidas_antropometricas extends Model
{
    use HasFactory;
    protected $table ='medidas_antropometricas';
    protected $fillable = [
    
        'med_peso',
        'med_talla',
        'med_imc',
        'med_circunferencia_cintura',
        'med_circunferencia_muñeca'
    ];   

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }
}
