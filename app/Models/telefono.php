<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $table ='telefonos';
    protected $fillable = [ 
    
        'tel_valor',
    ];



    //Relacion uno a muchos inversa

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
