<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplementos extends Model
{
    use HasFactory;
    protected $table ='suplementos';
    protected $fillable = [
        'sup_nombre'
    ];

    //Relaciones de uno a uno

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
