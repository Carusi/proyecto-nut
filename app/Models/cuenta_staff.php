<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cuenta_staff extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table ='cuentas_staff';
    protected $fillable = [
        'cue_nombre',
        'cue_apellido',
        'cue_correo',
        'cue_password'
    ];  
    public function setPasswordAttribute($value){
        $this->attributes['cue_password'] = bcrypt($value);
    }

     //Relacion uno a muchos

     public function posts(){
        return $this->hasMany(Post::class);
    }
}
