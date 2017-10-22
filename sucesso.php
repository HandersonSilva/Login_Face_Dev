<?php
    session_start();
    $statusLogin = isset($_SESSION['userLogin'])?$_SESSION['userLogin']:"";
    if( $statusLogin != 'connected'){
        header('Location: http://handersonsilva.com/login_face/');
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Facebook</title>
            <script type="text/javascript" src="script/logout.js"></script>
            <script  src="script/jquery-3.2.1.min.js"></script>
        </head>
        <body>
       
          <input type="button" onclick=" FB.logout();"/>
  
           <!-- <fb:login-button autologoutlink="true" onclick=" FB.logout();">
            </fb:login-button>
            
        -->
       
            <div id="status">
         
            </div>

            
            
        </body>
    </html>