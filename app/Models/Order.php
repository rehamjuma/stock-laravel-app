<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    public function products()
    {
        return $this->BelongsToMany(Product::class,'order_product');
        //->withPivot('quantity');
    }
}
