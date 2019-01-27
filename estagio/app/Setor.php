<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome', 'carga_h','n_vagas',
    ];

    public function user(){

        return $this->belongsToMany(User::class);
    }


}
