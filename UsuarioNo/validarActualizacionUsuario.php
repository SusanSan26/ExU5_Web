<?php
session_start();
$id=$_SESSION['ID2'];
$name= $_POST['nombre'];
$lname=$_POST['apellidos'];
$email=$_POST['correo'];
$pass=$_POST['password'];
$age= $_POST['edad'];



function correo($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     return true;
    } else {
      return false;
    }
}


  
function tam($cad){
    if(strlen($cad)>3){
        return true;
    }
    else{
        return false;
    }
}

function det($cadena){
    if($cadena===strtolower($cadena)){
        return -1;
    }else{
        return 0;
    }
}

function det2($contra){
if (!preg_match('/[^A-Za-z0-9]/', $contra)) // '/[^a-z\d]/i' should also work.
{
 return 0;
}
else{
    return -1;
}
}
$resultado4=correo($email);
$resultado3=tam($pass);
$resultado=det($pass);
$resultado2=det2($pass);
if($resultado2===-1 ||$resultado===-1 ||$resultado3===false){
    header("Location: cuenta.php?error=Password debe tener 4 caracteres, una Mayuscula, y numero");
 }else if($resultado4==false){
    header("Location: cuenta.php?error=Email no valido");

 }else{

    $servidor="localhost";
    $rol1="admin";
    $usuarioBD="root";
    $pwBD="";
    $nomBD="examenu5";
    $db= mysqli_connect($servidor,$usuarioBD,$pwBD,$nomBD);
    
   //Terminar el query falta el enlace con el id 
    $consulta="UPDATE  personas  SET nombre ='$name', apellidos='$lname', correo='$email', edad='$age', pass='$pass' WHERE id='$id' ";
$resultado = mysqli_query($db, $consulta);


if($resultado==TRUE){
    header("Location: cuenta.php?error2=Actualizado Exitosamente");
}
else{
    header("Location: cuenta.php?error2=No se puede actualizar");
}


 }


?>