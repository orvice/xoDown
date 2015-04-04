<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Xo\Forum\Node;
use Redirect, Input, Auth;

class NodeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return view('Admin.Forum.Node.Home',[
            'nodes' => Node::All()
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
        return view('Admin.Forum.Node.create');
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
            'name' => 'required|unique:nodes|max:255',
            'description' => 'required',
        ]);
        $node = new Node;
        $node->name = Input::get('name');
        $node->description = Input::get('description');
        if ($node->save()) {
            return Redirect::to('admin/forum/node')->withInput()->withSuccess('添加成功！');
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
        $node = Node::find($id);
        return view('Admin.Forum.Node.edit',[
            'node' => $node
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
            'name' => 'required|unique:nodes,name,'.$id.'|max:255',
            'description' => 'required',
        ]);
        $node = Node::find($id);
        $node->name = Input::get('name');
        $node->description = Input::get('description');
        if ($node->save()) {
            return Redirect::to('admin/forum/node')->withInput()->withSuccess('保存成功！');
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
	}

}
