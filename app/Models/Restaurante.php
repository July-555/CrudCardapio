<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'imagem',
        'categoria',
        'login',
        'horario',
        'phone',
        'cellular',
        'social',
        'descricao',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/restaurantes/'.$this->getKey());
    }
}
