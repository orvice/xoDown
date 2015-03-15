@extends('User._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                订购
                <small>Order</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $plan->plan_name_full }}</h3>
                </div>
                <div class="box-body">
                    <p>{{ $plan->plan_info }}</p>
                    <h4>价格</h4>
                    <p> 月:<code>{{ $plan->month_price }}</code> </p>
                    <label> <select name="time" >
                            <option value ="month">月付(30天)</option>
                            <option value ="3month">季付(90天)</option>
                            <option value="6month">半年(180天)</option>
                            <option value="year">年付(365天)</option>
                        </select>
                    </label>
                    <p><a href="{{ URL('user/plan/info/'.$plan->id) }}" class="btn btn-success">购买</a></p>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <div class="callout callout-info">
                        <h4>注意!</h4>
                        <p>购买前注意选择时间，一旦订购订单将会立即创建并开通服务.</p>
                    </div>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
@endsection
