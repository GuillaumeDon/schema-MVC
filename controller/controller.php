<?php
require('model/modeleUtilisateur.php');
require('model/modeleAvis.php');


function home(){
    $requete = getUsers();

    require('view/listUsersView.php');
}

function testimonials(){

    $requete = getTestimonials();

    require('view/listTestimonialsView.php');
}


function test(){
    require('view/test.php');
}