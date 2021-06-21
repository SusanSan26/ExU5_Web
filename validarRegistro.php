<?php
$id=$id= random_int(0,200);
$name= $_POST['nombre'];
$lname=$_POST['apellidos'];
$email=$_POST['correo'];
$pass=$_POST['password'];
$age= $_POST['edad'];
$type=$_POST['tipo'];

function correo($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     return true;
    } else {
      return false;
    }
}


if($_POST['tipo']==="Si"){
    $type="Si";
}
if($_POST['tipo']==="No"){
    $type="No";
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
    header("Location: registrarUsuario.php?error=Pass debe tener 4 caracteres, Mayuscula, y numero");
 }else if($resultado4==false){
    header("Location: registrarUsuario.php?error=Email no valido");

 }else{

    $servidor="localhost";
    $rol1="admin";
    $usuarioBD="root";
    $pwBD="";
    $nomBD="examenu5";
    $db= mysqli_connect($servidor,$usuarioBD,$pwBD,$nomBD);
    
   
    $consulta="INSERT INTO personas (id, nombre, apellidos, correo, edad, tipo, pass) VALUES ('$id', '$name', '$lname','$email','$age','$type','$pass') ";
$resultado = mysqli_query($db, $consulta);
$consulta2="INSERT INTO usuarios (Id, correo, pass, tipo) VALUES ('$id','$email','$pass','$type') ";
$resultado2 = mysqli_query($db, $consulta2);

if($resultado==TRUE&&$resultado2==TRUE){
    header("Location: index.php");
}

 }


?>