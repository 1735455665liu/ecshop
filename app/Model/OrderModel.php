<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class  OrderModel extends Model
{
    public $table='shop_order';
    public $timestamps=false;
    public $primaryKey="order_id";
}
