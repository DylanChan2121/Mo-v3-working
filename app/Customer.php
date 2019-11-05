<?php
# @Date:   2019-11-05T14:03:03+00:00
# @Last modified time: 2019-11-05T14:08:10+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
}
