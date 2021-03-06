<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Xo\Item\Item;
use App\Xo\Item\Cate;
use App\Xo\Item\Comment;
use App\Xo\News\News;
use App\Xo\Forum\Post;
use App\Xo\Forum\Topic;
use App\User;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $count['item'] = Item::get()->count();
        $count['cate'] = Cate::get()->count();
        $count['comment'] = Comment::get()->count();
        $count['view'] = Item::get()->sum('view_count');
        $count['news'] = News::get()->count();
        $count['user'] = User::get()->count();
        $count['post'] = Topic::get()->count()+Post::get()->count();
        $item = Item::All()->take(8);
        $news = News::All()->take(6);
        $topics = Topic::All()->take(6);

        return view('Home.Home',[
            'ItemList' => $item,
            "Count"  => $count,
            "News"  => $news,
            "Topics" => $topics
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
