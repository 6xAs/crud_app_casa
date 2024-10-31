<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $fillable = [
           'pedido_id',
           'produto_id',
           'quantidade',
           'valor_unitario',
       ];

       ####################### 😍😍😍 RELACIONAMENTOS COMEÇAM AQUI 😍😍😍 ###########################
       // ItemPedido pertence a Pedido através do pedido_id
       public function pedido()
       {
           return $this->belongsTo(Pedido::class, 'pedido_id');
       }
       // Um ItemPedido pertence a um Produto  através do produto_id (Permite que você acesse o produto associado a um item do pedido usando $itemPedido->produto.)
       public function produto()
       {
           return $this->belongsTo(Produto::class, 'produto_id');
       }
}
