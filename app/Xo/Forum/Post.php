<?php namespace App\Xo\Forum;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	//
    public function belongsToUser(){
        return $this->belongsTo('App\User','user_id');
    }

}
