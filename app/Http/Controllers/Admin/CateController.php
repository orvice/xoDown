<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Xo\Item\Cate;
use Redirect, Input, Auth;

class CateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        //
        return view('Admin.Item.Cate.Home',[
            'cates' => Cate::All()
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
        return view('Admin.Item.Cate.create');
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
            'name' => 'required|unique:cates|max:255',
            'description' => 'required',
        ]);
        $cate = new Cate;
        $cate->name = Input::get('name');
        $cate->description = Input::get('description');
        if ($cate->save()) {
            return Redirect::to('admin/item/cate')->withInput()->withSuccess('添加成功！');
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
        $cate = Cate::find($id);
        return view('Admin.Item.Cate.edit',[
            'cate' => $cate
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
            'name' => 'required|unique:cates,name,'.$id.'|max:255',
            'description' => 'required',
        ]);
        $cate = Cate::find($id);
        $cate->name = Input::get('name');
        $cate->description = Input::get('description');
        if ($cate->save()) {
            return Redirect::to('admin/item/cate')->withInput()->withSuccess('保存成功！');
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
