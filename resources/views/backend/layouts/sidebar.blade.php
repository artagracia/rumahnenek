<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('img/logo.png')}}" alt="RNLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rumah Nenek</span>
    </a>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          <li class="nav-header">DASHBOARD</li>
          <li class="nav-item">
            <a href="{{url('backend/member')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Member
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/kamar')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Cabin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('backend/reservasi')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Reservasi
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>