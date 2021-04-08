@include('partials.nav')
<?php
require '../php/Funciones.php';
$obj = new Funciones();

$posts = $obj->getposts();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Publicaciones</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
</head>
<style type="text/css">

    p {
        text-align: center;
        text-align: justify;
        border:1px;
        margin:auto;
    }
    div{
        text-align: center;
    }
</style>
<body>
    <section class="projects-clean" style="background-color: #eef4f7;">
    <div class="container">
        <div class="intro">
        <h2 class="text-center">NOTICIAS</h2>
        <p class="text-center">Actividades que se realizan periódicamente en la LCA.</p>
            </div>
        <div class="row projects">
            <?php foreach ($posts as $publicacion): ?>
                <div class="col-sm-6 col-lg-4 item">
                    <div class="shadow p-3 mb-5 bg-white rounded box">
                    <img class="img-fluid" src="{{ Storage::url ($publicacion['imagen'])}}">
                    <h3 class="name"><?php echo $publicacion['TituloNoti']; ?></h3>
                    <p><?php echo $publicacion["InfoNoti"] ?></p></div>
                </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
<div class="form-group">
        <h2 class="text-center">Vídeos Informativos</h2>
        <p class="text-center">Sección de labores que realizan la Liga Comunal del Agua.</p>
            </div>
 <div style=”text-align:right;”><iframe width="300" height="150" src="https://www.youtube.com/embed/b-VFaX1cOvU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/Ey4Q_hK5qDc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/Y60-_0E0IFE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/T3Z-emHsgss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/_KkNpEQD1NI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/nXQhJkWcPK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <iframe width="300" height="150" src="https://www.youtube.com/embed/2y39h0QoH_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
 <div class="form-group">
        <h2 class="text-center">Documentos Informativos</h2>
        <p class="text-center">Información de la Liga Comunal del Agua.</p>
            </div>
            <div style=”text-align:right;”><iframe src="https://drive.google.com/file/d/16TOc0sgG5PMbuuHC5G5-rveHBOEERx4p/preview" width="440" height="280"></iframe>
            <iframe src="https://drive.google.com/file/d/1So5wlognBznegLdXOaSmx5kA4K_IMJKw/preview" width="440" height="280"></iframe></div>
      </div>
      <div>
      </div>
      <div>
      </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>
</html>