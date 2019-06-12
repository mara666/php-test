<?php

function validarCampos(){
    if((is_numeric($_POST["nombre"]) == true) || (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
        echo "Está intentando enviar información incorrecta";
    }else{
        header("Location: imprimir.php?nombre=".$_POST["nombre"]."&email=".$_POST["email"]); /* Redirección del navegador */
        /* Asegurándonos de que el código interior no será ejecutado cuando se realiza la redirección. */
        exit;
    }
}

function validarEnvio(){
    if($POST){
        validarCampos();
    }
}
    
?>