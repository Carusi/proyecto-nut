<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anamesis_aumentaria extends Model
{
    use HasFactory;
    protected $table ='anamesis_aumentarias';
    protected $fillable = [

    'anau_desayuno',
    'anau_medio_dia',
    'anau_almuerzo',
    'anau_media_tarde'
    ];   

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }
}
