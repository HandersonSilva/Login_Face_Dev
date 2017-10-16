<?php

    require('src/facebook.php');
    
    $face = new Facebook(array(
        'appId' => '1473450896255901',
        'secret' => '9bdf23c2e58029b1d1c6da8e07fe6b81'
    ));

    $face->destroySession();

    echo "<script>window.location='index.php'</script>";