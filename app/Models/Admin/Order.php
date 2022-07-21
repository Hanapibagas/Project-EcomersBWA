<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_code',
        'category_id',
        'product_name',
        'description',
        'order_quantity',
        'price',
        'order_date',
    ];

    public function product()
    {
        return $this->belongsTo(Category::class);
    }
}
