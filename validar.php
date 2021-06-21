<?php

$email= $_POST['correo'];
$pass= $_POST['pass'];



    $servidor="localhost";
    $rol1="admin";
    $usuarioBD="root";
    $pwBD="";
    $nomBD="examenu5";
    $db= mysqli_connect($servidor,$usuarioBD,$pwBD,$nomBD);
    
    $consulta2="SELECT * FROM personas where correo='$email' and pass='$pass'";
    $resultado = mysqli_query($db, $consulta2);

   
    
    if(mysqli_num_rows($resultado)===1){
        session_start();
        $row= mysqli_fetch_assoc($resultado);
        
        if($row['correo']==$email && $row['pass']==$pass){
        if($row['tipo']=="Si"){

          
            $_SESSION['Nombre']=$row['nombre'];
            $_SESSION['ID']=$row['id'];
            
            header("Location: Escritor/inicio.php");
        }else if($row['tipo']=="No"){
            $_SESSION['Nombre2']=$row['nombre'];
            $_SESSION['ID2']=$row['id'];
            
            header("Location: UsuarioNo/inicio.php");

        }}
    
    } else{
        header("Location: index.php?error=Usuario no valido");
    }
        




?>