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
      <form method="POST" action="{{ route('buscaras')}}">
        @csrf
<div class="container">
  <div class="flash-message"> 
 @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
  @if(Session::has('alert-' . $msg)) 

  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p> 
  @endif 
 @endforeach 
 </div> <!-- end .flash-message --> 
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                      <legend class="text-center header"></legend>
                        <legend class="text-center header">Registro de Asadas</legend>

                        <div class="form-group row">
                            
                          
                            <span class="col-md-2 col-md-offset-2 text-center"></span>

                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Nombre ASADA<br></label>
                                <form action="{{ route('searchasada')}}" method="GET">
                                <div class="input-group">
                                  <input name="Nom_Asada" type="search" class="form-control">
                                  <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">BUSCAR</button><br>
                                  </span>
                                </div>
                              </form>    
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"   >
                              </div>
                              <br>
                                   <div class="table-responsive">
                               <table class="table table-table-striped" style="background-color: #FEFFFF">
    <thead >
  <tr>
    
    <th>#</th>

    <th>Nombre ASADA</th>

    <th>Cedula Juridica</th>

    <th>Abonados</th>

    <th>Presidente</th>

    <th>Vicepresidente</th>

    <th>Tesorero</th>

    <th>Vocal1</th>

    <th>Vocal2</th>

    <th>Fiscal</th>

    <th>Telefono</th>

    <th >Correo</th>
    
     <th>Accion</th>


  </tr>
 
  
  @foreach($registro as $reg)
  <tr>
    <td>{{$loop->iteration}}</td>

    <td>{{$reg->Nom_Asada}}</td>

    <td>{{$reg->ced_Juridica}}</td>

    <td>{{$reg->Cant_Abonados}}</td>

    <td>{{$reg->Presidente}}</td>

    <td>{{$reg->VicePresidente}}</td>

    <td>{{$reg->Tesorero}}</td>

    <td>{{$reg->Vocal_1}}</td>

    <td>{{$reg->Vocal_2}}</td>

    <td>{{$reg->Fiscal}}</td>

    <td>{{$reg->Telefono}}</td>

    <td>{{$reg->Correo}}</td>

    <td>
      <a href="{{route('admin.edit', $reg)}}" class="btn btn-primary border rounded">Editar</a>
      <form action="{{ route('admin.destroy', $reg) }}" class="d-inline" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('¿Esta seguro de eliminar el registro?')">Eliminar</button>
</form>
    </td>

  </tr>
 @endforeach

</table>
</div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2020 <a href="/">Home</a>.</strong> All rights
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