<?php
session_start();

?>
<html>
    <head>

    <script type="text/javascript" src="script/logout.js"></script>

    </head>
    <body>

    <?php if(  isset($_SESSION['login_face'])&& $_SESSION['login_face']== 'connected'){ echo $_SESSION['login_face'];?>
        <h1>LOGADO COM SUCESSO!!!</h1>

        <div id="status">
        </div>

    <?php } else{  echo $_SESSION['login_face'];?>
        <!--<script>  window.location = "http://handersonsilva.com/Login_Face_Dev/"; </script>-->
    <?php }?>
       
        <input type="button" value="Logout" onclick="FB.logout();">

        <fb:login-button autologoutlink="true"></fb:login-button>
       
    </body>
</html>