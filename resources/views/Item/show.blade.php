@extends('Home._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                课件信息
                <small>Info</small>
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
                        <h3 class="box-title">{{$item->title}}</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>作者: {{ $item->belongsToUser['name'] }} 发布于: {{ $item->created_at }}
                           <a href="{{ url('/item/cate/'.$item->belongsToCate['id'] ) }}">{{ $item->belongsToCate['name'] }}</a>
                        </p>

                        <p>{{ $item->body }}</p>

                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <form action="{{ URL('item/') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>评论</label>
                            <textarea class="form-control" name="body" rows="3"></textarea>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">提交评论</button>
                        </div>
                        </form>
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
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section>
@endsection
