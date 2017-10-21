<?php 
session_start();
echo $_SESSION['loginFace'];
?>
<html>
    <head>

    <script type="text/javascript" src="script/logout.js"></script>

    </head>
    <body>
    
        <h1>LOGADO COM SUCESSO!!!|Status=<?php echo $_SESSION['loginFace'];?></h1>

        <div id="status">
        </div>
        <input type="button" value="Logout" onclick="FB.logout();">

        <fb:login-button autologoutlink="true"></fb:login-button>
       
    </body>
</html>