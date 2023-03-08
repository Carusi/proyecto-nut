<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habitos_saludables extends Model
{
    use HasFactory;
    protected $table ='habitos_saludables';
    protected $fillable = [
        'hab_nombre'
    ];

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(User::class);
    }

}
