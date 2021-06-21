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
    <div class="p-2 ml-auto "><a  id="Link3" class="nav-link" href="#"><h6>Cerrar Session</h6></a></div>
  </div>

  <div class="d-flex justify-content-center">
  
  <div class="login-form">
 
    <form action="validarRegistro.php" method="post">
    <?php if(isset($_GET['error'])){ ?>
            <p class='error'><?php echo $_GET['error'];?></p>
        
            <?php } ?>
            <h3>Modificar artículo </h3>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                       
                       
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Categoría" required="required" name="nombre">
            </div>
        </div> 
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                     
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Titulo" required="required" name="apellidos">
            </div>
        </div> 
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                       
                    </span>                    
                </div>
                <input type="date" class="form-control" placeholder="Fecha de emisión " required="required" name="titulo">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                     
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Autor" required="required" name="text">
            </div>
        </div>    
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Texto" required="required" name="text">
           
            </div>
        </div>   
          
        ¿Desea insertar imagen?
                <input type="radio" name="tipo" value="Si" checked> Si
                <input type="radio" name="tipo" value="No"> No
                <br>
                <br>

                <input type="text" class="form-control" placeholder="Imgen" required="required" name="text">
           <br>
           <button type="submit" class="btn btn-primary btn-block">Cambiar</button>

<br>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Modificar</button>
            
        </div>
     
    </form>
 
</div>
        </div>



</body>
</html>