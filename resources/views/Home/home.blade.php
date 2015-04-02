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
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">课件数</span>
                        <span class="info-box-number">{{ $Count['item'] }}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">论坛帖子</span>
                        <span class="info-box-number">41,410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">新闻</span>
                        <span class="info-box-number">760</span>
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
                                        <td>{{ $item->cate_id }}</td>
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
                        <span class="info-box-number">4</span>
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
                        <span class="info-box-number">92,050</span>
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
                        <span class="info-box-number">163,921</span>
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

        <div class='row'>
            <div class='col-md-4'>
                <!-- DIRECT CHAT -->
                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Direct Chat</h3>
                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="3 New Messages" class='badge bg-yellow'>3</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'>Alexander Pierce</span>
                                    <span class='direct-chat-timestamp pull-right'>23 Jan 2:00 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                                    <span class='direct-chat-timestamp pull-left'>23 Jan 2:05 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-left'>Alexander Pierce</span>
                                    <span class='direct-chat-timestamp pull-right'>23 Jan 5:37 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Working with AdminLTE on a great new app! Wanna join?
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class='direct-chat-info clearfix'>
                                    <span class='direct-chat-name pull-right'>Sarah Bullock</span>
                                    <span class='direct-chat-timestamp pull-left'>23 Jan 6:10 pm</span>
                                </div><!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image" /><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    I would love to.
                                </div><!-- /.direct-chat-text -->
                            </div><!-- /.direct-chat-msg -->

                        </div><!--/.direct-chat-messages-->


                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                            <ul class='contacts-list'>
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user1-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Count Dracula
                              <small class='contacts-list-date pull-right'>2/28/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>How have you been? I was...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user7-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Sarah Doe
                              <small class='contacts-list-date pull-right'>2/23/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>I will be waiting for...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user3-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nadia Jolie
                              <small class='contacts-list-date pull-right'>2/20/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>I'll call you back at...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user5-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Nora S. Vans
                              <small class='contacts-list-date pull-right'>2/10/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Where is your new...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user6-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              John K.
                              <small class='contacts-list-date pull-right'>1/27/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Can I take a look at...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                                <li>
                                    <a href='#'>
                                        <img class='contacts-list-img' src='dist/img/user8-128x128.jpg'/>
                                        <div class='contacts-list-info'>
                            <span class='contacts-list-name'>
                              Kenneth M.
                              <small class='contacts-list-date pull-right'>1/4/2015</small>
                            </span>
                                            <span class='contacts-list-msg'>Never mind I found...</span>
                                        </div><!-- /.contacts-list-info -->
                                    </a>
                                </li><!-- End Contact Item -->
                            </ul><!-- /.contatcts-list -->
                        </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control"/>
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                      </span>
                            </div>
                        </form>
                    </div><!-- /.box-footer-->
                </div><!--/.direct-chat -->
            </div><!-- /.col -->
            <div class='col-md-4'>
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Members</h3>
                        <div class="box-tools pull-right">
                            <span class="label label-danger">8 New Members</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="dist/img/user1-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Alexander Pierce</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="dist/img/user8-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Norman</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="dist/img/user7-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Jane</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user6-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">John</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user2-160x160.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user5-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Sarah</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user4-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Nora</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user3-128x128.jpg" alt="User Image"/>
                                <a class="users-list-name" href="#">Nadia</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::" class="uppercase">View All Users</a>
                    </div><!-- /.box-footer -->
                </div><!--/.box -->
            </div><!-- /.col -->
            <div class='col-md-4'>
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Browser Usage</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="chart-responsive">
                                    <canvas id="pieChart" height="150"></canvas>
                                </div><!-- ./chart-responsive -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <ul class="chart-legend clearfix">
                                    <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                    <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                                </ul>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                    <div class="box-footer no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">United States of America <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                            <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                            <li><a href="#">China <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                        </ul>
                    </div><!-- /.footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
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
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="label label-success">Shipped</span></td>
                                    <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="label label-danger">Delivered</span></td>
                                    <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-info">Processing</span></td>
                                    <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="label label-danger">Delivered</span></td>
                                    <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
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
            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently Added Products</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Samsung TV <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Bicycle <span class="label label-info pull-right">$700</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image"/>
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">PlayStation 4 <span class="label label-success pull-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                                </div>
                            </li><!-- /.item -->
                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">View All Products</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
@endsection
