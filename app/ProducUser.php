<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducUser extends Model
{
    //
    protected $table="productuser";
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
