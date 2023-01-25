<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-road" aria-hidden="true"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Parking <sup>Port</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Autos Collapse Menu -->
    <li class="nav-item {{ request()-> routeIs('autos.*')  ? 'active' : '' }}">
      <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fa fa-car" aria-hidden="true"></i>
        <span>Autos</span>
      </a>
      <div id="collapseTwo" class="collapse {{ request()-> routeIs('autos.*')  ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Opciones de Autos:</h6>
          <a class="collapse-item {{ request()-> routeIs('autos.index')  ? 'active' : '' }}" href="{{ route('autos.index') }}">Tabla</a>
          <a class="collapse-item {{ request()-> routeIs('autos.create')  ? 'active' : '' }}" href="{{ route('autos.create') }}">Registrar</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Drivers Collapse Menu -->
    <li class="nav-item {{ request()-> routeIs('drivers.*')  ? 'active' : '' }}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDrivers" aria-expanded="true" aria-controls="collapseDrivers">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span>Conductores</span>
      </a>
      <div id="collapseDrivers" class="collapse {{ request()-> routeIs('drivers.*')  ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Opciones de Conductores:</h6>
          <a class="collapse-item {{ request()-> routeIs('drivers.index')  ? 'active' : '' }}" href="{{ route('drivers.index') }}">Tabla</a>
          <a class="collapse-item {{ request()-> routeIs('drivers.create')  ? 'active' : '' }}" href="{{ route('drivers.create') }}">Registrar</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Parking -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fa fa-road" aria-hidden="true"></i>
          <span>Parqueo</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Administración
    </div>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fa fa-users" aria-hidden="true"></i>
        <span>Usuarios</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Opciones de Usuarios:</h6>
          <a class="collapse-item" href="login.html">Tabla</a>
          <a class="collapse-item" href="register.html">Registrar</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->