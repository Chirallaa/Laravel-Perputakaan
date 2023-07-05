 <aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="/adminlte/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('active-dashboard')">
              <i class="fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link @yield('active-data-master')">
              <i class="fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/kategori" class="nav-link  @yield('active-kategori')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rak" class="nav-link  @yield('active-rak')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/penerbit" class="nav-link  @yield('active-penerbit')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku" class="nav-link  @yield('active-buku')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/transaksi" class="nav-link @yield('active-transaksi')">
              <i class="fas fa-recycle"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/chart" class="nav-link @yield('active-chart')">
              <i class="fas fa-chart-pie"></i>
              <p>
                Chart
              </p>
            </a>
          </li>
              <li class="nav-header">DATA USER</li>
              <li class="nav-item">
                <a href="/user" class="nav-link @yield('active-user')">
                  <i class="fas fa-user-cog"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>