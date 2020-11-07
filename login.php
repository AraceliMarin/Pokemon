<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    require ('conexion.php');
    $user= $_POST['email'];
    $pass= $_POST['password'];
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query=$con->prepare("SELECT * FROM usuarios WHERE email= '$user' and pass= '$pass'");

    $query -> bindParam(":user",$user);
    $query -> bindParam(":pass",$pass);
    $query ->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        echo "<script>
        alert('¡BIENVENIDO ENTRENADOR POKÉMON!');      
        alert('¡LO SENTIMOS ESTAMOS REALIZANDO MODIFICACIONES!');           
        </script>"; 
    }else{
        echo "<script>
    alert('¡ERROR DE AUTENTICCACION, VUELVA A INTENTARLO!');                
    </script>"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilosLogin.css">
</head>
<body>
<div class="container">
<h1>¡TE DAMOS LA BIENVENIDA AL CLUB DE ENTRENADORES POKÉMON! </h1>
 
<img src="img/gif.gif" alt="Comencemos" width=600px height=500px >
<form  method="post">
 <label>Nombre de usuario </label>
 <input type="text" name="email" placeholder="Escriba su email">
 <label>Contraseña </label>
 <input type="password" name="password" placeholder="Escriba su conntraseña">
 <input type="submit" value="Iniciar sesión">
 </form>

 </div>
</body>
</html>