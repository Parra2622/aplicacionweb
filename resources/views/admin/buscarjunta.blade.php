<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administración</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">

  @include('admin.partials.navbar')

  <!-- /.navbar -->
  {{-- Sidebar en la carpeta admin/partials --}}
  @include('admin.partials.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">


          </div>
          <div class="col-sm-12">

            <div class="card">
              <div class="card-header">

                <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Regresar al inicio</a></li>
                  <li class="breadcrumb-item active">Administración Liga Comunal del Agua</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="POST" action="{{ route('buscarjunta')}}">
        @csrf
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="well well-sm">
                <form class="form-horizontal" method="post">
                  <fieldset>
                    <b>
                      <legend class="text-center header">Junta Directiva</legend>
                    </b>

                    <div class="form-group row">
                      <span class="col-md-2 col-md-offset-2 text-center"></span>


                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      </div>
                      <br>
                      <div class=" table-responsive">
                        <table class="table table-hover" , style="background-color: white">

                          <thead>
                            <tr>

                              </th>

                              <th scope="col">#</th>

                              <th scope="col">Nombre</th>

                              <th scope="col">Puesto</th>

                              <th scope="col">Asada</th>

                              <th scope="col">Acción</th>

                            </tr>
                          </thead>
                          @foreach($registro as $reg)
                          <tr>

                            <td scope="row">{{$loop->iteration}}</td>

                            <td>{{$reg->Nombre}}</td>

                            <td>{{$reg->Puesto}}</td>

                            <td>{{$reg->Asada}}</td>

                            <td>
                              <a href="{{route('editar', $reg)}}" class="btn btn-primary border rounded">Editar</a>
                              <form action="{{ route('junta.eliminar', $reg) }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar el registro?')">Eliminar</button>
                              </form>
                </form>
                </td>

                </tr>

                </thead>
                @endforeach
              </div>

            </div>
            </table>

          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Created By</b> NEPV
    </div>
    <strong>Copyright &copy; 2020.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>

  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>