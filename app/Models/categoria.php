<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table ='categorias';
    protected $fillable = [
    
        'cat_nombre',
       
    ];   


     //Relacion uno a muchos

    public function admin_sevicio(){
        return $this->hasMany(admin_sevicio::class);
    }
}
