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
                <!-- TABLE: LATEST ITEMS -->
                <div class="box box-info">
                    <div class="box-body">
                        <p><a class="btn btn-success btn-sm" href="{{ url('/admin/news/create') }}">发布新闻</a></p>
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>标题</th>
                                    <th>发布时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $news)
                                    <tr>
                                        <td><a href="{{ url('/news/show/'.$news->id) }}">{{ $news->title }}</a></td>
                                        <td><div class="sparkbar" data-color="#00a65a" data-height="20">{{ $news->created_at }}</div></td>
                                        <td>
                                            <a class="btn  btn-info btn-sm" href="{{ url('/admin/news/'.$news->id.'/edit') }}" >编辑</a>

                                            <form action="{{ URL('admin/news/'.$news->id) }}" method="POST" style="display: inline;">
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="btn  btn-danger btn-sm">删除</button>
                                            </form>

                                        </td>
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
