@extends('Admin._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                论坛节点
                <small>Forum Nodes</small>
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
                        <p><a class="btn btn-success btn-sm" href="{{ url('/admin/news/create') }}">添加节点</a></p>
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>节点</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($nodes as $node)
                                    <tr>
                                        <td><a href="#">{{ $node->name }}</a></td>
                                        <td>
                                            <a class="btn  btn-info btn-sm" href="{{ url('/admin/forum/node/'.$node->id.'/edit') }}" >编辑</a>

                                            <form action="{{ URL('admin/forum/node/'.$node->id) }}" method="POST" style="display: inline;">
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
