<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $table ='direccions';
    protected $fillable = [
    
        'dir_barrio',
        'dir_valor',
        'dir_punto_ref',
    ];


    //Relacion de muchos a muchos

    public function usuarios(){
        return $this->belongsToMany(User::class);
    }
}
