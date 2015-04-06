@extends('Home._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                论坛
                <small>Forum</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- TABLE: LATEST ITEMS -->
                <div class="box box-info">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>节点</th>
                                    <th>作者</th>
                                    <th>发布时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($topics as $topic)
                                    <tr>
                                        <td><a href="{{ url('/forum/topic/'.$topic->id) }}">{{ $topic->title }}</a></td>
                                        <td><a href="{{ url('/forum/node/'.$topic->belongsToNode['id']) }}">{{ $topic->belongsToNode['name'] }}</a></td>
                                        <td>{{ $topic->belongsToUser['name'] }}</td>
                                        <td>{{ $topic->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">导航</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p> <a href="{{ url('/forum/topic/create') }}" class="btn btn-sm btn-info btn-flat ">发帖</a></p>
                            @foreach($nodes as $node)
                                <p><a href="{{ url('/forum/node/'.$node->id ) }}">{{$node->name}}</a></p>
                            @endforeach
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

        </div><!-- /.row -->
        </section>
@endsection
