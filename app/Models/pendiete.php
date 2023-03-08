<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendientes extends Model
{
    use HasFactory;
    protected $table ='pendientes';
    protected $fillable = [
        'pen_nombre'
    ];

     //Relaciones de uno a uno

     public function usuario(){
        return $this->belongsTo(usuario::class);
    }

}
