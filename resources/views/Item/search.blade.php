@extends('Home._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                课件搜索
                <small>Search</small>
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
                    <div class="box-header with-border">
                        <h3 class="box-title">最新课件</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>课件</th>
                                    <th>作者</th>
                                    <th>分类</th>
                                    <th>发布时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ItemList as $item)
                                    <tr>
                                        <td><a href="{{ url('/item/show/'.$item->id) }}">{{ $item->title }}</a></td>
                                        <td>{{ $item->belongsToUser['name'] }}</td>
                                        <td><a href="{{ url('/item/cate/'.$item->belongsToCate['id'] ) }}">{{ $item->belongsToCate['name'] }}</a></td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{ $item->created_at }}</div></td>
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
                        <h3 class="box-title">分类</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        @foreach ( $cate as $cate )
                        <p><a href="{{ url('/item/cate/'.$cate->id ) }}">{{$cate->name}}</a></p>
                        @endforeach
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section>
@endsection
