<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'nome','responsavel','telefone','email','endereco','cnpj','carga_h'
    ];

    public function user(){

        return $this->belongsToMany(User::class);
    }
}
