<?php namespace App\Http\Controllers\Teacher;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Xo\Item\Item;
use App\Xo\Item\Cate;
use Redirect, Input, Auth;

class ItemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
        $user_id = Auth::user()->id;
        return view('Teacher.Item.Home',[
            'items' => Item::where('author_id','=',$user_id)->get()
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
        return view('Teacher.Item.create',[
            'cates' => Cate::All()
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'cate_id' => 'required',
            'url' => 'required',
        ]);
        $item = new Item;
        $item->title = Input::get('title');
        $item->body = Input::get('body');
        $item->cate_id = Input::get('cate_id');
        $item->author_id = Auth::user()->id;
        $item->url = Input::get('url');
        if ($item->save()) {
            return Redirect::to('/teacher');
        } else {
            return Redirect::back()->withInput()->withErrors('添加失败！');
        }
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
        $item = Item::find($id);
        //
        return view('Teacher.Item.edit',[
            'cates' => Cate::All(),
            'item' => $item
        ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'cate_id' => 'required',
            'url' => 'required',
        ]);
        $item = Item::find($id);
        $item->title = Input::get('title');
        $item->body = Input::get('body');
        $item->cate_id = Input::get('cate_id');
        $item->author_id = Auth::user()->id;
        $item->url = Input::get('url');
        if ($item->save()) {
            return Redirect::to('/teacher');
        } else {
            return Redirect::back()->withInput()->withErrors('更新失败！');
        }
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
        $item = Item::find($id);
        $item->delete();
        return Redirect::to('teacher');
	}

}
