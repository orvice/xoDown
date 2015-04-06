<?php namespace App\Xo\Forum;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	//

    public function belongsToNode()
    {
        return $this->belongsTo('App\Xo\Forum\Node','node_id');
    }

    public function belongsToUser()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
