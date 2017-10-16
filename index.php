<?php

    require('src/facebook.php');
    
    $face = new Facebook(array(
        'appId' => '131535117502383',
        'secret'=> '274a481b140984793a353262b64d95ef'
    ));

    $usuario = $face->getUser();

    $url = "";

    if($usuario){
        
        try {
            $usuario_profile = $face->api("/me");
            
        } catch(FacebookApiException $erro){
            $usuario = null;
        }
        
    } else {
         $url = $face->getLoginUrl(array('scope' => 'email'));
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Login usando Facebook</title>
        </head>
        <body>
            
            <?php if($usuario) { ?>
                
            <?php
                //var_dump($usuario_profile);
            ?>
                
            <?php
        
                $usuario_profile["gender"];
        
                // criar um banco de dados
                // salvar os dados no banco de dados
        
            ?>
            
            Seja bem vindo <?=$usuario_profile["name"]?>! <a href="logout.php">Efetuar Logoff</a>            
            <h1>Seu email: <?=$usuario_profile['email']?></h1>
            
            <?php } else { ?>
            
                <a href="<?=$url?>">Efetuar login usando Facebook</a>
            
            <?php } ?>
            
        </body>
    </html>
