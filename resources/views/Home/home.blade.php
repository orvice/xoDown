@extends('Home._main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            首页
            <small>Home</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-files-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">课件数</span>
                        <span class="info-box-number">{{ $Count['item'] }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">论坛帖子</span>
                        <span class="info-box-number">{{ $Count['post'] }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">新闻</span>
                        <span class="info-box-number">{{ $Count['news'] }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">注册用户</span>
                        <span class="info-box-number">{{ $Count['user'] }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

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
                                        <td> <a href="{{ url('/item/cate/'.$item->belongsToCate['id'] ) }}">{{ $item->belongsToCate['name'] }}</a> </td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{ $item->created_at }}</div></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ url('/item') }}" class="btn btn-sm btn-default btn-flat pull-right">查看所有课件</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">分类</span>
                        <span class="info-box-number">{{ $Count['cate'] }}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                  <span class="progress-description">
                    Cate
                  </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">访问量</span>
                        <span class="info-box-number">{{ $Count['view'] }}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                  <span class="progress-description">
                    Traffic
                  </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">数据量</span>
                        <span class="info-box-number">114GiB</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                  <span class="progress-description">
                    Size
                  </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">评论</span>
                        <span class="info-box-number">{{ $Count['comment'] }}</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                  <span class="progress-description">
                   Comments
                  </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->



        <div class="row">

            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">最近新闻</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>日期</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($News as $news)
                                <tr>
                                    <td><a href="{{ url('/news/show/'.$news->id) }}">{{$news->title}}</a></td>
                                    <td>{{ $news->created_at }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{ url('/news') }}" class="uppercase">所有新闻</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-8">
                <!-- TABLE: LATEST POSTS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">论坛新帖</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>主题</th>
                                    <th>节点</th>
                                    <th>作者</th>
                                    <th>时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">Shipped</span></td>
                                    <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{ url('/forum/new') }}" class="btn btn-sm btn-info btn-flat pull-left">发帖</a>
                        <a href="{{ url('/forum') }}" class="btn btn-sm btn-default btn-flat pull-right">进入论坛</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

        </div><!-- /.row -->

    </section><!-- /.content -->
@endsection
