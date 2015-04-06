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
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$topic->title}}</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <p>作者: {{ $topic->belongsToUser['name'] }}
                           节点 <a href="{{ url('/forum/node/'.$topic->belongsToNode['id'] ) }}">{{ $topic->belongsToNode['name'] }}</a>
                        </p>
                        <p>{{ $topic->body }}</p>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">

                        @foreach ($topic->Posts as $post)
                            <p><a href="{{ URL('/user/show/'.$post->user_id) }}" >{{ $post->belongsToUser['name'] }} </a>发表于:{{ $post->created_at }}</p>
                            <p>{{ $post->body }}</p>
                        @endforeach

                       @if(Auth::guest())
                           <p>请<a href="{{ URL('/auth/login') }}">登录</a>后回帖</p>
                       @else
                            <form action="{{ URL('forum/post') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="topic_id" value="{{ $topic->id }}">
                                <div class="form-group">
                                    <label>回帖</label>
                                    <textarea class="form-control" name="body" rows="3"></textarea>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">回帖</button>
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
                        <p>点击量{{$topic->view_count}}</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section>
@endsection
