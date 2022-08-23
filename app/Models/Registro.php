<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    protected $fillable = [
        'pais_id',
        'name',
        'color',
        'commit'
    ];
    public function pais(){
        return $this->hasMany('App\Models\Pais');
    }
}
