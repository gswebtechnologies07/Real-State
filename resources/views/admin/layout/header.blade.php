  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Welcome <strong>{{ Auth::guard('admin')->user()->name }} </strong></a>
        <!-- ( {{ Auth::guard('admin')->user()->type }}) -->
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin/logout')}}" class="nav-link">Logout</a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->