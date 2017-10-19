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
        
    
    </script>
        <h1>LOGADO COM SUCESSO!!!</h1>

        <a id="logout" href="http://handersonsilva.com/Login_Face_Dev/index.php?l=true">Logout</a>
        <fb:logout-button id="logout" onlogi>
        </fb:logout-button>
    </body>
</html>