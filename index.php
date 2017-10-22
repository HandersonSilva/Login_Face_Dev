
<!DOCTYPE html>
    <html>
        <head>
            <title>Login usando Facebook</title>
            <script type="text/javascript" src="script/login.js"></script>
            <script  src="script/jquery-3.2.1.min.js"></script>
        </head>
        <body>
         <!-- button Complete-->
        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" onlogin="checkLoginState();" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
        <br/>
             <div id="fb-root"></div>

   <!--
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" autologoutlink="true">
            </fb:login-button>
-->
         
            <p>Verifique o que está acontecendo pelo console...</p>
            <div id="status">
         
            </div>

            
            
        </body>
    </html>
