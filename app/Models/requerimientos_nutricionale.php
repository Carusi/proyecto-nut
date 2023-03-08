<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requerimientos_nutricionales extends Model
{
    use HasFactory;
    protected $table ='requerimientos_nutricionales';
    protected $fillable = [
    'req_grasa',
    'req_cho',
    'req_proteina',
    'req_macronutrientes'
    ];  

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }
    
    
}
