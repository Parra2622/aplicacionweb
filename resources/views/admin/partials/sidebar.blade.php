  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-10"

  style= "background-color: #003357;">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link user-panel mt-3 pb-3 mb-3 d-flex">
      <img src="../../dist/img/LCA.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-10"
           style="opacity: .9">
      <span class="brand-text font-weight-light" style= "font-size: 18px;">Liga Comunal del Agua</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style= "background-color: #003357;">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="../../dist/img/usuario.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{auth()->user()->name}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @can('administrador')
          <li class="nav-item has-treeview">
            <a href="{{route('usuarios')}}" class="nav-link">
              <i class="nav-icon fas fa fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          @endcan
       @can('administrador')
          <li class="nav-item has-treeview">
            <a href="{{route('roles')}}" class="nav-link">
              <i class="nav-icon fas fa fa-cogs"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
          @endcan

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-edit"></i>
              <p>
                Registros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                  <a href="{{ route('create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Crear una nueva ASADA</p>
                  </a>

                 <a href="{{route('searchasada')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de ASADAS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Control Operativo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bitacora') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Bitácora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('search') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar Bitácora</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-map"></i>
              <p>
                Mapeos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('map')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Mapeo</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('searchmap')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar Mapeos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-list-alt"></i>
              <p>
                Junta Directiva
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                  <a href="{{ route('createjunta') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Crear Junta Directiva</p>
                  </a>

                 <a href="{{route('buscarjunta')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista Junta Directiva</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-file-image"></i>
              <p>
                Galeria
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                  <a href="{{ route('creargaleria') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Imagen</p>
                  </a>

                 <a href="{{route('buscargale')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de Imagenes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-file"></i>
              <p>
                Notas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('pub')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Publicación</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('buscarpub')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Publicación</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('img')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tablas informativas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('buscarimg')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Tablas</p>
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