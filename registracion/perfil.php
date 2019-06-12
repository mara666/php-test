<?php

if($_POST){
    //var_dump($_POST);exit;
    validar_archivo();
    validar_usuario();
}

function validar_archivo(){
    if($_FILES){
        if($_FILES["imagen"]["error"] != 0){
            echo "Hubo un error al cargar la foto";
        }else{
            $ext = pathinfo($_FILES["imagen"], PATHINFO_EXTENSION);
            
            if($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
                echo "La foto debe ser en formato jpg, jpeg o png";
            }else{
                //no hay errores
                move_uploaded_file($_FILES["imagen"]["tmp_name"], "archivos/imagen.".$ext);
            }
        }
    }
}


function validar_usuario(){
    if($_POST["password"] == $_POST["repetirpass"]){
        crearUsuario();
        echo "<h2 class='text-center'><b>Bienvenido</b><br><br> ". $_POST["email"] ."!</h2>";
    }else{
        echo "<h2>Las passwords no coinciden, <a href='register.php'>vuelve</a> a intentarlo</h2>";
    }
}

function crearUsuario() {
    $usuario = [
      "email" => $_POST["email"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT), //PASSWORD_DESDE_EL_FORM_ENCRIPTADA
      "repetirpass" => password_hash($_POST["repetirpass"], PASSWORD_DEFAULT),
      "imagen" => $_POST["imagen"]
    ];
    //var_dump($usuario);exit;
  
    $usuariosJSON = file_get_contents("usuarios.json");
    //var_dump($usuarios);exit;
    
    $usuariosArray = json_decode($usuariosJSON, true); //TRANSFORMAR_$USUARIOS_EN_UN_ARRAY
    //var_dump($usuariosArray);exit;

    array_push($usuariosArray, $usuario); //AGREGARLE_A_$usuariosArray_$usuario      
    
    //var_dump($usuariosArray);exit;
    $usuariosFinal = json_encode($usuariosArray); //TRANSFORMAR_$usuariosArray_A_JSON
  
    file_put_contents("usuarios.json", $usuariosFinal);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido!</title>
    <link rel="stylesheet" href="style_propio.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header class="main-header">
        <img src="fotos/perfil1.jpg" alt="foto_perfil" class="foto">
    </header>
</body>
