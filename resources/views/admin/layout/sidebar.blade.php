<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('public/admin/images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">53 Higt Street</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        @if(!empty(Auth::guard('admin')->user()->image))
          <img src="{{asset('public/admin/images/photos/'.Auth::guard('admin')->user()->image)}}" class="admin_img" alt="User Image">
          @else
          <img src="{{asset('public/admin/images/no-image.jpg')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('admin/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ url('admin/index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                CMS Pages
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
         
          <!--<li class="nav-item">-->
          <!--  <a href="{{url('admin/availability')}}" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-calendar-alt"></i>-->
          <!--    <p>-->
          <!--    Available Flat-->
               
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a href="{{url('admin/slider')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Slider
              </p>
            </a>
          </li> 
          <!--<li class="nav-item">-->
          <!--  <a href="{{url('admin/gallery')}}" class="nav-link">-->
          <!--    <i class="nav-icon far fa-image"></i>-->
          <!--    <p>-->
          <!--     Gallery-->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li> -->
          <li class="nav-item">
            <a href="{{url('admin/residences')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
              Residence
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{url('admin/bedroom')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
              Bedroom
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="{{url('admin/building')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
              Common Roof Deck
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="{{url('admin/studio')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
              Studio
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="{{url('admin/setting')}}" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
              Site Setting
                <!-- <span class="badge badge-info right"></span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Admin Setting
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/update-password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/update-details')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Admin Details</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>