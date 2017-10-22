<?php
    session_start();

    $_SESSION['userLogin'] = isset($_POST['login'])? $_POST['login']:"";

    if( $_SESSION['userLogin'] == 'connected'){
        loginSuccess();
    }


function loginSuccess(){
    echo "logged with success!!!";
    //redirecionar para pagi
    require('sucesso.php');
  

}