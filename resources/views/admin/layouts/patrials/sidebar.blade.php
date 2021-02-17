 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Multiple Auth</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Ma</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="{{ route('home') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>

              <li class="menu-header">Pages</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                    @can('manage-users')
                    <li><a href="{{ route('admin.users.index') }}">Settings</a></li>
                    @endcan
                  <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                </ul>
              </li>
            </ul>


        </aside>
      </div>
