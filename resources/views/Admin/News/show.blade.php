@extends('Home._main')

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
                <!-- TABLE: LATEST ITEMS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$news->title}}</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>作者: {{ $news->belongsToUser['name'] }} 发布于: {{ $news->created_at }}
                        </p>
                        <p>{{ $news->body }}</p>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section>
@endsection
