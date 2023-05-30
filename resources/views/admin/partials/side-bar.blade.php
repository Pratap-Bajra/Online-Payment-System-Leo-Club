<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Super Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('uploads/user/'.auth()->user()->UserInfo->image ?? '') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucfirst(auth()->user()->name ?? '')}}</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banner.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('banner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner List</p>
                </a>
              </li>
              
            </ul>
          </li>
          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('news.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('news.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News List</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Testimonial
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('testimonial.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('testimonial.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial List</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Core Member
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('member.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('member.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Project
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('project.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('project.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project List</p>
                </a>
              </li>
              
            </ul>
          </li>
          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('aboutus.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us Page</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Member List
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{ route('member.getAllMemberList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Member List</p>
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
