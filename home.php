<html>
    <head>

    </head>
    <body>
    <script>
         // Load the SDK asynchronously
         (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
                        
                // In your onload method:
                FB.Event.subscribe('auth.login', login_event);
                FB.Event.subscribe('auth.logout', logout_event);

                // In your JavaScript code:
                var login_event = function(response) {
                console.log("login_event");
                console.log(response.status);
                console.log(response);
                }

                var logout_event = function(response) {
                console.log("logout_event");
                console.log(response.status);
                console.log(response);
                }
                    
    </script>
        <h1>LOGADO COM SUCESSO!!!</h1>

       
        <input type="button" value="Logout" onclick="FB.logout();">
       
    </body>
</html>