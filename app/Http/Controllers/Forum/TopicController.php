<?php namespace App\Http\Controllers\Forum;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Xo\Forum\Node;
use App\Xo\Forum\Topic;
use Redirect, Input, Auth;

class TopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
        return view('Forum.create',[
            'nodes' => Node::All()
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
            'node_id' => 'required',
        ]);
        $topic = new Topic;
        $topic->title = Input::get('title');
        $topic->body = Input::get('body');
        $topic->node_id = Input::get('node_id');
        $topic->user_id = Auth::user()->id;
        if ($topic->save()) {
            return Redirect::to('/forum');
        } else {
            return Redirect::back()->withInput()->withErrors('发布失败！');
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
        //update count
        $topic = Topic::find($id);
        $count = $topic->view_count+1;
        $topic->view_count = $count;
        $topic->save();
        return view('Forum.show',[
            'topic' => $topic
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
