<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索课件"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
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
                <a href="#">
                    <i class="fa fa-th"></i> <span>新闻中心</span>
                </a>
            </li>



            <li  >
                <a href="#">
                    <i class="fa fa-edit"></i> <span>论坛</span>
                </a>

            </li>


            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>站内信</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>