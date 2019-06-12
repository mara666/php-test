<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="text-center">
    <h2>Registrar usuario</h2><br>
    <form action="perfil.php" method="POST" enctype="multipart/form-data">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <label for="repetirpass">Repetir Password:</label>
        <input type="password" name="repetirpass" required>
        <br><br>
        <label for="imagen">Elegir foto de perfil</label>
        <input type="file" name="imagen">
        <br><br>
        <button type="submit" class="btn btn-success">Registrarme</button>
    </form>
    <br>
    <h5><a href="listadoUsuarios.php">Ver listado de usuarios registrados</a></h5>
</body>

<?php
/*
    function crearUsuario() {
        $usuario = [
          "email" => $_POST["email"],
          "password" => password_hash($_POST["password"], PASSWORD_DEFAULT) //PASSWORD_DESDE_EL_FORM_ENCRIPTADA
        ];
      
        $usuarios = file_get_contents("usuarios.json");
        
        $usuariosArray = json_decode($usuarios); //TRANSFORMAR_$USUARIOS_EN_UN_ARRAY
        
        array_push($usuariosArray, $usuario); //AGREGARLE_A_$usuariosArray_$usuario      
      
        $usuariosFinal = json_encode($usuariosArray); //TRANSFORMAR_$usuariosArray_A_JSON
      
        file_put_contents("usuarios.json", $usuariosFinal);
      }
      */
?>

</html>