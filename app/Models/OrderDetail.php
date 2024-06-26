<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'address',
        'province',
        'postal_code',
        'country',
        'phone',
        'status',
        'message',
        'tracking_no',
        'order_no',
        'total',
    ];

    public function orderitems(){
        return $this->hasMany(OrderItem::class);
    }

    public function payments(){
        return $this->hasMany(PaymentDetail::class);
    }
}
