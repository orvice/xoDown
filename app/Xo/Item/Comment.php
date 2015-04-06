<?php namespace App\Xo\Item;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	//

    public function belongsToUser(){
        return $this->belongsTo('App\User','user_id');
    }

}
