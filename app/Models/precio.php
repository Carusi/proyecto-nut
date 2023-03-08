<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class precio extends Model
{
    use HasFactory;
    protected $table ='precios';
    protected $fillable = [
    
        'pre_nombre',
        'pre_valor',
        'pre_cupo',
       
    ];   

    //Relacion uno a muchos inversa

    public function modalidad(){
        return $this->belongsTo(modalidad::class);
    }
}
