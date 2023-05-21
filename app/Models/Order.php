<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'OrderID';

    protected $fillable = ['ClientID', 'OrderDate', 'TotalAmount'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'ClientID');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'OrderID');
    }

}
