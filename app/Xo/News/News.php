<?php namespace App\Xo\News;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	//
    public function belongsToUser()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
