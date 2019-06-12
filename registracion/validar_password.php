<?php

function validar_password(){
    if($_POST["password"] == $_POST["repetirpass"]){
        header("Location: perfil.php");
    }else{
        echo "Las passwords no coinciden, intente nuevamente";
    }
}

?>