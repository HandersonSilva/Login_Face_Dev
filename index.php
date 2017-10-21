
 <?php 
        session_start();
        $_SESSION['login_face'] = "Pulou o if";
        $script ="<script type='text/javascript' src='script/logout.js'></script>";
        
        echo $script;
        
        $loginFace = "<script> document.write(loginFace)</script>";
        if($loginFace == 'connected'){
            $_SESSION['login_face'] = 'connected';
        }else{
            $_SESSION['login_face'] = 'Not connected';
        }
       echo $_SESSION['login_face'];
 
 ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Login usando Facebook</title>
            
        </head>
        <body>
       

         <!--
            Below we include the Login Button social plugin. This button uses
            the JavaScript SDK to present a graphical Login button that triggers
            the FB.login() function when clicked.
           
 -->
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>
            
         

            <div id="status">
            </div>

            
            
        </body>
    </html>
