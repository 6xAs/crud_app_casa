<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'qtd_estoque',
        'categoria',
    ];

    ####################### 😍😍😍 RELACIONAMENTOS COMEÇAM AQUI 😍😍😍 ###########################
    //Produto (Pai) tem muitos itens pedidos (Filhos)
    public function itemPedidos()
    {
        return $this->hasMany(ItemPedido::class, 'produto_id');
    }

    //Relacionamento muitos-para-muitos (🚨🚨🚨 ATENÇÃO: Um produto pode pertencer a várias categorias (eletrônicos, casa, etc.) e uma categoria pode ter vários produtos.)
    public function categoria()
    {
        return $this->belongsToMany(ItemPedido::class, 'categoria_id');
    }
}
