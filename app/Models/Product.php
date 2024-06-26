<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, int>
     */

    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'image',
        'alt_image',
        'detail',
        'description',
        'price',
        'category_id',
        'inventory_id',
    ];

    protected $casts = [
        'alt_image' => 'array',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function inventories()
    {
        return $this->belongsTo(Inventory::class,'inventory_id');
    }

}
