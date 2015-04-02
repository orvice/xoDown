<?php namespace App\Xo\Item;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Item extends Model {



    public function belongsToUser()
    {
         return $this->belongsTo('App\User','author');
        // $author_id = $this->get()->author;
        // return $author_id;
    }

}
