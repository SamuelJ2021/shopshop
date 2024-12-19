<?php


function accueilControleur($twig, $db){
    echo $twig->render('accueil.html.twig', array());
   }

   /*mentions légales, à propos*/

   function contactControleur($twig){
    echo $twig->render('contact.html.twig', array());
   }