<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = 'user_addresses';
    protected $fillable = [
        'user_id',
        'address_line1',
        'city',
        'postal_code',
        'country',
        'phone_no',
    ];

    public function userAddress() {
        return $this->belongsTo(User::class,'users.id','user_id');
    }
}
