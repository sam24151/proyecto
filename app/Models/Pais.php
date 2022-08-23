<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    protected $fillable = [
        'name',
        'color'
    ];
    public function registro(){
        return $this->belongsTo('App\Models\Registro');
    }
}
