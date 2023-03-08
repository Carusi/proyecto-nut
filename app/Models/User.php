<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usu_nombre',
        'email',
        'password',
        'usu_apellido',
        'usu_num_doc',
        'usu_tipo_documento',
        'usu_genero',
        'usu_fch_nac',
        'usu_telefono',
        'usu_eps'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
         $this->attributes['password'] = bcrypt($value);
    }

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

    public function historia_clinica(){
        return $this->hasOne(historia_clinica::class);
    }

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
