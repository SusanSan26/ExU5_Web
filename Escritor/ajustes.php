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
<?php
session_start();
$nom=$_SESSION['Nombre'];
$ide=$_SESSION['ID'];
if(isset($_SESSION['ID'])){

}
?>



    <div id="navegacion" class="d-flex mb-3 ">
        <div class="p-2 "><a id="Link1" class="navbar-brand " href="http://localhost/ExamenU5/Escritor/inicio.php">
                <h5>Tecno-Bookly</h5>
            </a></div>
        <div class="p-2 "><a id="Link2" class="nav-link" href="http://localhost/ExamenU5/Escritor/ListaArticulos.php">
                <h6>Articulos</h6>
            </a></div>
        <div class="p-2 ml-auto "><a id="Link3" class="nav-link" href="http://localhost/ExamenU5/inicio.php">
                <h6>Cerrar Session</h6>
            </a></div>
    </div>

    <div class="d-flex justify-content-center">

        <div id="ajustes" class="login-form">
            <img id="user" src="https://image.flaticon.com/icons/png/512/3237/3237442.png" alt=""
                style="width: 80px; height:80px;">
                
              
            <?php if(isset($_GET['error'])){ ?>
            <p class='error'><?php echo $_GET['error'];?></p>
        
            <?php } ?>


            <table id="tablita1" class="table table-bordered">
            <tr>
            <th colspan="2"><h5>Ajustes</h5></th>
            
            </tr>
   
    <tbody>
      <tr>
        <td> <label for=""> <h6>   Mi cuenta</h6></label></td>
        <td> <form id="etiqueta" action="cuenta.php" method="post">
                   
                   <button type="Submit" class="btn btn-info"> Ir</button>
           </form></td>
        
      </tr>
      <tr>
        <td> <label for=""> <h6>   Mis Articulos</h6></label></td>
        <td> <form  id="etiqueta" action="Articulos.php" method="post">
           
        <button type="Submit" class="btn btn-info"> Ir</button>
           
   </form></td>
     
      </tr>
   
    </tbody>
  </table>

           
           

        </div>
    </div>



</body>

</html>