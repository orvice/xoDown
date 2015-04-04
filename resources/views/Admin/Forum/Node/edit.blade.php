@extends('Admin._main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            论坛节点
            <small>Forum Nodes</small>
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
                    <form action="{{ URL('admin/forum/node/'.$node->id) }}" method="POST">
                    <div class="box-body">
                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">节点名字</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $node->name }}">
                        </div>

                        <div class="form-group">
                            <label>节点描述</label>
                            <textarea class="form-control" name="description" rows="3">{{ $node->description }}</textarea>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">提交修改</button>
                        </div>

                    </div>
                    </form>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
@endsection
