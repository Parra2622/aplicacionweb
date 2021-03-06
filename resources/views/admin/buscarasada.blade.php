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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
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
      <form method="GET" action="{{ route('searchasada')}}">
           @if($searchasa)
          <h6>
            <div class="alert alert-primary" role="alert">
                 Los resultados para '{{$searchasa}}' son:
            </div>
          </h6>
          @endif
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
                        <b><legend class="text-center header">Registro de ASADAS</legend></b>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
                                   <div class="table-responsive">
                          <table id="table_id" class="table table-hover", style="background-color: white">
    <thead >
  <tr>
    
    <th  scope="col">#</th>

    <th  scope="col">Nombre ASADA</th>

    <th  scope="col">Cédula Jurídica</th>

    <th  scope="col">Abonados</th>

    <th scope="col">Presidente</th>

    <th scope="col">Vicepresidente</th>

    <th scope="col">Tesorero</th>

    <th scope="col">Vocal1</th>

    <th scope="col">Vocal2</th>

    <th scope="col">Fiscal</th>

    <th scope="col">Teléfono</th>

    <th  scope="col">Correo</th>
    
     <th scope="col">Acción</th>

  </tr>
  </thead>
  <tbody>
  @foreach($asada as $reg)
  <tr>
    <td scope="row">{{$loop->iteration}}</td>

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
      
     
      <form action="{{ route('admin.destroy', $reg) }}" class="d-inline" method="POST" >
     
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger btn-sm" value="enable" onclick="return confirm('¿Esta seguro de eliminar el registro?')">Eliminar</button>
  
</form>

    </td>

  </tr>
 @endforeach
</tbody>
</table>
</div>
      </form>
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

</body>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table_id').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por paginas",
            "zeroRecords": "Ningun registro",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
             "emptyTable": "Ningún dato disponible en esta tabla",
            "search": "Buscar: ",
            "paginate": {
              "next": "Siguiente",
              "previous": "Anterior"
            }
        }
    } );
} );
</script>
</html>