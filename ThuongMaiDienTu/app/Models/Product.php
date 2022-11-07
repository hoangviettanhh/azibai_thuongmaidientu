<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product_electronic';
    protected $fillable =
   [
       'pro_name',
       'pro_sku',
       'pro_keyword',
       'pro_descr',
       'pro_cost'
   ];

}
