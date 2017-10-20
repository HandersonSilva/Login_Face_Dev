  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {

    // Logged into your app and Facebook.
    FB.api('/me', {fields:'name,email'} , function(response) {
           // Response tem tudo que você solicitou, inclusive o access_token.
            console.log(response);
            console.log('Successful login for: ' + response.name+"|"+response.email);
            document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + ' | '+response.email;
    });
 
   
    }
     if (response.status === 'not_authorized') {
         //redirect for home
        window.location = "http://handersonsilva.com/Login_Face_Dev/home.php";
      
        } else{
        window.location = "http://handersonsilva.com/Login_Face_Dev/home.php";      
        }
   
    
    
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : '387714388328615',
        cookie     : true,  // enable cookies to allow the server to access 
                            // the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
    });
  
    
    
    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.
    
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
    
    };
    
    
    
    
    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    FB.Event.subscribe('auth.logout', logout_event);

    var logout_event = function(response) {
        console.log("logout_event");
        console.log(response.status);
        console.log(response);
    }

   /* FB.Event.subscribe('auth.login', function () {
        window.location = "http://handersonsilva.com/Login_Face_Dev/home.php";
    });*/