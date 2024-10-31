<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;


    ####################### 😍😍😍 RELACIONAMENTOS COMEÇAM AQUI 😍😍😍 ###########################
    //Categoria pertence a produto (Pai)
    public function produtos()
    {
        return $this->belongsToMany(Produto::class);

    }
}
