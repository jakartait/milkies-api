<?php

namespace App;

use App\SalesOrder;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function salesOrders()
    {
        return $this->hasMany(SalesOrder::class);
    }
    

}
