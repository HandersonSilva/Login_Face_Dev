<?php
    
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Login usando Facebook</title>
            <script type="text/javascript" src="script/login.js"></script>
        </head>
        <body>
            

         <!--
            Below we include the Login Button social plugin. This button uses
            the JavaScript SDK to present a graphical Login button that triggers
            the FB.login() function when clicked.
           
 -->
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>

         
            
        </body>
    </html>
