<?php
    session_start();

    $_SESSION['userLogin'] = isset($_POST['login'])? $_POST['login']:"";

    if( $_SESSION['userLogin'] == 'connected'){
        loginSuccess();
    }else{
        loginFailed();
    }


function loginSuccess(){
    //redirecionar para pagi
    require('sucesso.php');
    echo "logged with success!!!";

}

function  loginFailed(){
    require('index.php');    

    echo " Sorry, failed was in login ";
}