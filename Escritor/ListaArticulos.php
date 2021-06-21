

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title></title>

</head>

<body>




    <div id="navegacion" class="d-flex mb-3 ">
        <div class="p-2 "><a id="Link1" class="navbar-brand " href="#">
                <h5>Tecno-Bookly</h5>
            </a></div>


            
        <div class="p-2 ">
            <a id="Link2" class="nav-link" href="ListaArticulos.php">
                <h6>Articulos</h6>
            </a>
        </div>
        <div class="p-2 mr-auto  ">

<form class="form-inline" action="buscarArticulo.php">
<input class="form-control mr-sm-2" type="text" placeholder="Buscar Articulos">
<button class="btn btn-success" type="submit">Search</button>
</form>

</div>


       

<?php 

session_start();

if(isset($_SESSION['ID'])){
    
}
            if(isset($_SESSION['Nombre'])){
                ?>
    <div class="p-2 ml-auto ">

        <a id="Link3" class="nav-link" href="ajustes.php">
            <h6><?php echo $_SESSION['Nombre'];?></h6>

        </a>

    </div>
    <?php } ?>
        
        <div class="p-2 ">

            <a id="Link3" class="nav-link" href="http://localhost/ExamenU5/inicio.php">
                <h6>Cerrar Session</h6>

            </a>

        </div>
    </div>

    <h1>Aqui lista los articulos por Categorias</h1>

   

         





</body>

</html>