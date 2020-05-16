<?php

namespace App;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    protected $fillable   = ['customer_id', 'sales_date', 'qty'];
    protected $table      = "salesorders";

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
