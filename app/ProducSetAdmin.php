<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProducSetAdmin extends Model
{
    //
    protected $table="productsetadmin";
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
}
