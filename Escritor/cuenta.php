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
        <div class="p-2 ml-auto ">

            <a id="Link3" class="nav-link" href="http://localhost/ExamenU5/inicio.php">
                <h6>Cerrar Session</h6>

            </a>

        </div>
    </div>

    <div id="caja" class="d-flex justify-content-center">

        <div class="login-form">
            <img id="user" src="https://image.flaticon.com/icons/png/512/3237/3237442.png" alt=""
                style="width: 80px; height:80px;">

            <form action="validarActualizacionUsuario.php" method="post">
                <?php if(isset($_GET['error'])){ ?>
                <p class='error'><?php echo $_GET['error'];?></p>

                <?php } ?>

                <?php





    $servidor="localhost";
    $rol1="admin";
    $usuarioBD="root";
    $pwBD="";
    $nomBD="examenu5";
    $db= mysqli_connect($servidor,$usuarioBD,$pwBD,$nomBD);
    
    $consulta2="SELECT * FROM personas where id='$ide'";
    $resultado = mysqli_query($db, $consulta2);

   
    
    if(mysqli_num_rows($resultado)===1){
        
        $row= mysqli_fetch_assoc($resultado);

        $nombre=$row['nombre'];
        $apellido=$row['apellidos'];
        $correo=$row['correo'];
        $edad=$row['edad'];
        $tipo=$row['tipo'];
        $pass=$row['pass'];
       
        
    } else{
        header("Location: cuenta.php?error=Usuario no valido");
    }
?>










                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input type="text" value="<?php echo $nombre;?>" class="form-control" placeholder="Nombre" required="required" name="nombre">
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellidos" required="required"
                            name="apellidos" value="<?php echo $apellido;?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Correo" required="required" name="correo" value="<?php echo $correo;?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Contrasena" required="required"
                            name="password" value="<?php echo $pass;?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="	fa fa-child"></i>
                            </span>
                        </div>
                        <input type="Number" class="form-control" placeholder="Edad" required="required" name="edad" value="<?php echo $edad;?>">
                    </div>
                </div>

                
                <br>
                <?php if(isset($_GET['error2'])){ ?>
                <p class='error2'><?php echo $_GET['error2'];?></p>

                <?php } ?>

                <br>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Actualizar</button>

                </div>

            </form>

        </div>
    </div>



</body>

</html>