<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia_clinica extends Model
{
    use HasFactory;
    protected $table ='historia_clinicas';
    protected $fillable = [ 
        'hicl_medicametos',
        'hicl_motivo_consulta',
        'hicl_antecedentes_personales',
        'hicl_antecedentes_familiares',
        'hicl_paraclinicos',
        'hicl_objetivos',
        'hicl_otras_informaciones'
    ];

     //Relaciones de uno a uno

    public function usuario(){
        return $this->belongsTo(User::class);
    }

   
}
