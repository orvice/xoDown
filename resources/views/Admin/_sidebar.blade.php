<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->

        @if (Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('/img/avatar.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>游客</p>
                </div>
            </div>
        @else
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('/img/avatar.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>
        @endif


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">导航</li>
            <li  >
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> <span>首页</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{ url('/') }}">
                    <i class="fa fa-files-o"></i>
                    <span>课件</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/item') }}"><i class="fa fa-circle-o"></i>最新课件</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/admin/news') }}">
                    <i class="fa fa-th"></i> <span>新闻管理</span>
                </a>
            </li>



            <li  >
                <a href="{{ url('/forum') }}">
                    <i class="fa fa-edit"></i> <span>论坛</span>
                </a>

            </li>


            <li>
                <a href="{{ url('/mailbox') }}">
                    <i class="fa fa-envelope"></i> <span>站内信</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>