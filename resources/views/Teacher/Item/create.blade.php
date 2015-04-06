@extends('Admin._main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            课件管理
            <small>Item</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>糟糕!</strong> 似乎出现了点问题.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="box box-info">
                    <form action="{{ URL('teacher/item') }}" method="POST">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">课件名字</label>
                            <input type="text" name="title" class="form-control" id="title" >
                        </div>

                        <div class="form-group">
                            <label>课件分类</label>
                            <select name="cate_id" >
                                @foreach($cates as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">课件下载地址</label>
                            <input type="text" name="url" class="form-control" id="url" >
                        </div>

                        <div class="form-group">
                            <label>课件描述</label>
                            <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">添加课件</button>
                        </div>

                    </div>
                    </form>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
@endsection
