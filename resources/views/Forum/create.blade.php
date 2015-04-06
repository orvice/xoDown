@extends('Admin._main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            新闻中心
            <small>News</small>
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
                    <form action="{{ URL('/forum/topic') }}" method="POST">
                    <div class="box-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">帖子标题</label>
                            <input type="text" name="title" class="form-control" id="title" >
                        </div>

                        <div class="form-group">
                            <label>节点</label>
                            <select name="node_id" >
                                @foreach($nodes as $node)
                                <option value="{{$node->id}}">{{$node->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>主题内容</label>
                            <textarea class="form-control" name="body" rows="3"></textarea>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">发帖</button>
                        </div>

                    </div>
                    </form>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section>
@endsection
