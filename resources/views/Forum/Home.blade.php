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
                                        <td>{{ $topic->belongsToNode['name'] }}</td>
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
        </div><!-- /.row -->
        </section>
@endsection
