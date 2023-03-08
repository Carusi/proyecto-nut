<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class usuario extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table ='usuarios';
    protected $fillable = [
    
        'usu_nombre',
        'usu_apellido',
        'usu_num_doc',
        'usu_fch_nac',
        'usu_eps',
        'usu_gen',
        'usu_tip',
        'usu_correo', 
        'password'
    ];
    protected $dates = ['usu_fch_nac'];
 
    //Relacion uno a muchos

    public function telefono(){
        return $this->hasMany(telefono::class);
    }

    //Relacion de muchos a muchos

    public function direccions(){
        return $this->belongsToMany(direccion::class);
    }

     public function admin_servicios(){
        return $this->belongsToMany(admin_servicio::class);
    }

    //Relaciones de uno a uno

    public function suplemento(){
        return $this->hasOne(suplemento::class);
    }

    public function requerimientos_nutricionale(){
        return $this->hasOne(requerimientos_nutricionales::class);
    }

    public function pendiente(){
        return $this->hasOne(pendientes::class);
    }

    public function medidas_antropometrica(){
        return $this->hasOne(medidas_antropometricas::class);
    }

    public function historial_personal_clinico(){
        return $this->hasOne(historial_personal_clinico::class);
    }

    /*public function historia_clinica(){
        return $this->hasOne(historia_clinica::class);
    }*/

    public function historia_alimentaria(){
        return $this->hasOne(historia_alimentaria::class);
    }

    public function habitos_saludable(){
        return $this->hasOne(habitos_saludables::class);
    }

    public function anamesis_aumentaria(){
        return $this->hasOne(anamesis_aumentaria::class);
    }
}
