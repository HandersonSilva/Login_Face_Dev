<?php

session_start();

if(isset($_SESSION['login_face']) && $_SESSION['login_face']=='unknown'){
    "<script>  window.location = 'http://handersonsilva.com/Login_Face_Dev/'; </ script>" ;
}


?>

<html>
    <head>

    <script type="text/javascript" src="script/logout.js"></script>

    </head>
    <body>
    
        <h1>LOGADO COM SUCESSO!!!</h1>

        <div id="status">
        </div>
        <input type="button" value="Logout" onclick="FB.logout();">

        <fb:login-button autologoutlink="true"></fb:login-button>
       
    </body>
</html>