<?php
require_once '../lib/vendor/autoload.php';
require_once '../src/controleur/_controleurs.php';
require_once '../config/parametres.php';
require_once '../config/connexion.php';
require_once '../config/routes.php';
$loader = new \Twig\Loader\FilesystemLoader('../src/view/');
$twig = $twig = new \Twig\Environment($loader, []);
/*src public lib config*/
$contenu = getPage();
print($contenu);
$contenu($twig, $db);