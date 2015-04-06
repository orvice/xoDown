<?php namespace App\Xo\Item;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Item extends Model {



    public function belongsToUser()
    {
         return $this->belongsTo('App\User','author_id');
    }

    public function belongsToCate()
    {
        return $this->belongsTo('App\Xo\Item\Cate','cate_id');
    }

    public function Comments()
    {
        return $this->hasMany('App\Xo\Item\Comment','item_id','id');
    }

}
