@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">后台首页</div>

                    <div class="panel-body">

                        <a href="{{ URL('admin/pages/create') }}" class="btn btn-lg btn-primary">新增</a>

                        @foreach ($plans as $plan)
                            <hr>
                            <div class="page">
                                <h4>{{ $plan->plan_name_full }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $plan->plan_info }}
                                    </p>
                                    <p>流量<code>{{ $plan->plan_traffic }}</code></p>
                                </div>
                            </div>
                            <a href="{{ URL('user/plan/info/'.$plan->id) }}" class="btn btn-success">购买</a>

                            <form action="{{ URL('admin/pages/'.$plan->id) }}" method="POST" style="display: inline;">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">删除</button>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection