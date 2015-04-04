<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Xo\News\News;
use Redirect, Input, Auth;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return view('Admin.News.Home',[
            'news' => News::All()
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
        return view('Admin.News.create');
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
            'title' => 'required|unique:news|max:255',
            'body' => 'required',
        ]);
        $news = new News;
        $news->title = Input::get('title');
        $news->body = Input::get('body');
        $news->user_id = Auth::user()->id;
        if ($news->save()) {
            return Redirect::to('admin/news');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
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
        $news = News::find($id);
        return view('Admin.News.edit',[
            'news' => $news
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
            'title' => 'required|unique:news,title,'.$id.'|max:255',
            'body' => 'required',
        ]);
        $news = News::find($id);
        $news->title = Input::get('title');
        $news->body = Input::get('body');
        $news->user_id = Auth::user()->id;
        if ($news->save()) {
            return Redirect::to('admin/news')->withInput()->withSuccess('保存成功！');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
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
        $news = News::find($id);
        $news->delete();
        return Redirect::to('admin/news');
	}

}
