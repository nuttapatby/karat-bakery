<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    protected $fillable = [
        'product_id',
        'order_detail_id',
        'quantity',
        'price',
    ];

    public function userOrder(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function products(): BelongsTo{
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function orderdetails(){
        return $this->belongsTo(OrderDetail::class,'order_detail_id','id');
    }
}
