<?php namespace App\Http\Controllers\Item;

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
        return view('Item.Home',[
            'cate'  => Cate::All(),
            'ItemList' => Item::All()
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
        //update count
        $item = Item::find($id);
        $count = $item->view_count+1;
        $item->view_count = $count;
        $item->save();
        return view('Item.show',[
            'item' => $item
        ]);
	}

    public function search(){
        $keyword = Input::get('key');
        return view('Item.Home',[
            'cate'  => Cate::All(),
            'ItemList' => Item::where('title','LIKE', '%'.$keyword.'%')->get()
        ]);
    }

    public function cate($id)
    {
        //
        return view('Item.Home',[
            'cate'  => Cate::All(),
            'ItemList' => Item::where('cate_id','=',$id)->get()
        ]);
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
