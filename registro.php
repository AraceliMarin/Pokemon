<?php 


if($_SERVER['REQUEST_METHOD']=='POST'){
    require 'conexion.php';
    $email=filter_var(strtolower($_POST['email']),FILTER_SANITIZE_STRING); //convertimos a minusculas el email
    $password=$_POST['password'];
    $password2=$_POST['confirm_pasword'];
if (!empty($email) && !empty($password) && !empty($password2)) {//validacion ningun dato vacio

    if ($password==$password2) { // validacionContraseñas iguales
           
                $sql = "INSERT INTO usuarios (email, pass) VALUES (:email, :password)";
                $stmt = $con->prepare($sql);  //ejecucion de la consulta
                $stmt->bindParam(':email', $_POST['email']); //guardamos de email
              //  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);//cifrado de password
                $stmt->bindParam(':password', $password); //guardamos el password

                if ($stmt->execute()) {
                echo "<script>
                alert('¡FELICIDADES YA ERES PARTE DE LOS ENTRENADORES POKÉMON!');      
                alert('¡LO SENTIMOS ESTAMOS REALIZANDO MODIFICACIONES!');           
                </script>"; 
               
                } else {
                echo "<script>
                alert('LO SENTIMOS HA OCURRIDO UN ERROR CREANDO SU USUARIO, VERIFIQUE LOS DATOS INGRESADOS');     
                 </script>"; 
                }  
        }else{
        echo "<script>
        alert('¡LAS CONTRASEÑAS NO COINCIDEN!');               
        </script>"; 
        }
    
    }else{
    echo "<script>
    alert('¡DEBES DE LLENAR TODOS LOS CAMPOS!');               
    </script>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilosLogin.css">
</head>
<body>
<div class="container">
<h1>¡ÚNETE AL GRUPO DE ENTRENADORES POKÉMON!  </h1>
 
<img src="img/gif-registro.gif" alt="Comencemos" width=600px height=500px >
<form  method="post">
 <label>Correo electronico </label>
 <input type="text" name="email" placeholder="Escriba su email">
 <label>Escriba su contraseña </label>
 <input type="password" name="password" placeholder="Escriba su conntraseña">
 <label>Confirme su contraseña </label>
 <input type="password" name="confirm_pasword" placeholder="Confirme su conntraseña">

 <input type="submit" value="¡Registrate!">
 </form>

 </div>
</body>
</html>
</body>
</html>