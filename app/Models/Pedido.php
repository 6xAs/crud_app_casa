<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_cliente',
        'status',
    ];

    ####################### 😍😍😍 RELACIONAMENTOS COMEÇAM AQUI 😍😍😍 ###########################
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function itemPedidos()
    {
        return $this->hasMany(ItemPedido::class, 'pedido_id');
    }

    public function pagamento()
    {
        return $this->hasOne(Pagamento::class, 'pedido_id');
    }

    public function entrega()
    {
        return $this->hasOne(Entrega::class, 'pedido_id');
    }
}
