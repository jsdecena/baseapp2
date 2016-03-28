<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="{{url('admin')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview @if(request()->segment(2) == 'employee') active @endif">
        <a href="#">
          <i class="fa fa-users"></i> <span>Employees</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.employee.index')}}"><i class="fa fa-circle-o"></i> List employees</a></li>
          <li><a href="{{route('admin.employee.create')}}"><i class="fa fa-plus"></i> Add a employee</a></li>
        </ul>
      </li>
      <li class="treeview @if(request()->segment(2) == 'customer') active @endif">
        <a href="#">
          <i class="fa fa-users"></i> <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('admin.customer.index')}}"><i class="fa fa-circle-o"></i> List customers</a></li>
          <li><a href="{{route('admin.customer.create')}}"><i class="fa fa-plus"></i> Add a customer</a></li>
        </ul>
      </li>      
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>