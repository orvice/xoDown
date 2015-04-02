<?php namespace App\Xo\Item;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Item extends Model {



    public function belongsToUser()
    {
         return $this->belongsTo('App\User','author_id');
    }

}
