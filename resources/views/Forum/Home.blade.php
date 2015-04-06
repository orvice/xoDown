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
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>发布时间</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $news)
                                    <tr>
                                        <td><a href="{{ url('/news/show/'.$news->id) }}">{{ $news->title }}</a></td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{ $news->created_at }}</div></td>
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
