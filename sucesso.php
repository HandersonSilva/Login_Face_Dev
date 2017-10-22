<?php
    session_start();
    $statusLogin = isset($_SESSION['userLogin'])?$_SESSION['userLogin']:"";
    if( $statusLogin != 'connected'){
       $_SESSION['not_logged'] = "true";
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
                <div class="fb-login-button" data-max-rows="1" data-size="large"  data-show-faces="true" data-auto-logout-link="true" ></div>
                <br/>     
  
           
            
    
       
            <div id="status">
         
            </div>

            
            
        </body>
    </html>