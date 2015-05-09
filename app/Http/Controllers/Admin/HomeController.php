<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Xo\Item\Item;
use App\Xo\Item\Cate;
use App\Xo\News\News;
use App\Xo\Forum\Post;
use App\Xo\Forum\Topic;
use App\User;
use Redirect, Input, Auth;

class HomeController extends Controller {

    public function __construct()
    {
        // $this->middleware('auth');

        if(Auth::user()->group_id != 2 ){
            return Redirect('/');
        }
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::user()->group_id != 2 ){
            return Redirect('/');
        }

        $count['item'] = Item::get()->count();
        $count['cate'] = Cate::get()->count();
        $count['news'] = News::get()->count();
        $count['user'] = User::get()->count();
        $count['post'] = Topic::get()->count()+Post::get()->count();

        return view('Admin.Home',[
            "Count"  => $count
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
