<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey  = 'stock_id';
    protected $fillable = [
        'product_id',
        'qty',
        'wirehosue',
        'wire_phone'
    ];
}