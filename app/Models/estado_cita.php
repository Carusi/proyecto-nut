<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado_cita extends Model
{
    use HasFactory;
    protected $table ='estado_citas';
    protected $fillable = [
     
        'est_nombre',
       
    ];   


        //Relacion uno a muchos

      public function admin_sevicio(){
        return $this->hasMany(admin_sevicio::class);
    }
}
