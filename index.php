<?php

// routeur
//Contôleur
    //Modèle
    //Vue

require ('controller/controller.php');

try{
    if(isset($_GET['page'])){

        if($_GET['page']=='home'){
            home();

        }
        elseif($_GET['page']=='avis'){
            testimonials();
        }
        elseif($_GET['page']=='test'){
            test();
        }


        else {
            throw new Exception ("Désolé, la page n'existe pas");
        }
    }
        else{
            home();
        }
    
}
catch(Exception $e){
   
    $error = $e->getMessage();
    require('view/errorView.php');
}