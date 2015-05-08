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
                        <p>作者: {{ $item->belongsToUser['name'] }}
                           分类 <a href="{{ url('/item/cate/'.$item->belongsToCate['id'] ) }}">{{ $item->belongsToCate['name'] }}</a>
                        </p>
                        <p>{{ $item->body }}</p>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">

                        @foreach ($item->Comments as $comment)
                            <p><a href="{{ URL('/user/show/'.$comment->user_id) }}" >{{ $comment->belongsToUser['name'] }} </a>发表于:{{ $comment->created_at }}</p>
                            <p>{{ $comment->content }}</p>
                        @endforeach

                       @if(Auth::guest())
                           <p>请<a href="{{ URL('/auth/login') }}">登录</a>后发表评论</p>
                       @else
                            <form action="{{ URL('item/comment') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="item_id" value="{{ $item->id }}">
                                <div class="form-group">
                                    <label>评论</label>
                                    <textarea class="form-control" name="content" rows="3"></textarea>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">提交评论</button>
                                </div>
                            </form>
                       @endif
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">其他信息</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p><a  class="btn btn-success" href="{{URL('/').$item->url}}">下载此课件</a></p>
                        <p>课件发布时间{{$item->created_at}}</p>
                        <p>最后更新时间{{$item->updated_at}}</p>
                        <p>点击量{{$item->view_count}}</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section>
@endsection
