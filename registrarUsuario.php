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
    <div class="p-2 "><a id="Link1" class="navbar-brand " href="http://localhost/ExamenU5/inicio.php"><h5>Tecno-Bookly</h5></a></div>
    <div class="p-2 "><a  id="Link2" class="nav-link" href="ListaArticulos.php"><h6>Articulos</h6></a></div>
    <div class="p-2 ml-auto "><a  id="Link3" class="nav-link" href="#"><h6>Iniciar Session</h6></a></div>
  </div>

  <div class="d-flex justify-content-center">
  
  <div class="login-form">
  <img id="user" src="https://image.flaticon.com/icons/png/512/3237/3237448.png" alt="" style="width: 80px; height:80px;">

    <form action="validarRegistro.php" method="post">
    <?php if(isset($_GET['error'])){ ?>
            <p class='error'><?php echo $_GET['error'];?></p>
        
            <?php } ?>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-user"></i>
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Nombre" required="required" name="nombre">
            </div>
        </div> 
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-user"></i>
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Apellidos" required="required" name="apellidos">
            </div>
        </div> 
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-envelope"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Correo" required="required" name="correo">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" placeholder="Contrasena" required="required" name="password">
            </div>
        </div>    
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="	fa fa-child"></i>
                    </span>                    
                </div>
                <input type="Number" class="form-control" placeholder="Edad" required="required" name="edad">
            </div>
        </div>   
          
        Desea agregar sus propias investigaciones?
                <input type="radio" name="tipo" value="Si" checked> Si
                <input type="radio" name="tipo" value="No"> No
                <br>
                <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            
        </div>
     
    </form>
 
</div>
        </div>



</body>
</html>