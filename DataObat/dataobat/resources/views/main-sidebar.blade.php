<aside class="main-sidebar">
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('adminobat/dist/img/admin1.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>frilia</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="{{ url('post') }}">
            <i class="fa fa-file"></i> <span>Data Obat</span>
          </a>
        </li>
        <li class="active">
          <a href="{{ url('penghasilan') }}">
            <i class="fa fa-file"></i> <span>Data Penghasilan</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>