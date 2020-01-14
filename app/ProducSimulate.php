<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducSimulate extends Model
{
    //
    protected $table="productsimulate";
    protected $fillable = array(
        'productID',
        'productName',
        'ProductIMG',
        'productPrice',
        'userID',
        'quantity',
    );
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
}
