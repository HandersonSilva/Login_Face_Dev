
<!DOCTYPE html>
    <html>
        <head>
            <title>Login usando Facebook</title>
            <script type="text/javascript" src="script/login.js"></script>
            <script  src="script/jquery-3.2.1.min.js"></script>
        </head>
        <body>
       

         <!--
            Below we include the Login Button social plugin. This button uses
            the JavaScript SDK to present a graphical Login button that triggers
            the FB.login() function when clicked.
           
 -->
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" autologoutlink="true">
            </fb:login-button>
            
         
            <p>Verifique o que está acontecendo pelo console...</p>
            <div id="status">
         
            </div>

            
            
        </body>
    </html>
