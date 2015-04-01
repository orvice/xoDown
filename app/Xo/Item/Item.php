<?php namespace App\Xo\Item;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Item extends Model {

	//
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'xo_item';


    public function author_name()
    {
         return $this->belongsTo('App\User','author');
        // $author_id = $this->get()->author;
        // return $author_id;
    }

}
