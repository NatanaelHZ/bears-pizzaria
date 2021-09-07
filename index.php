<?php 

include_once('views/components/open-html-pages.php'); 
include_once('views/components/header.php'); 
include_once('views/components/nav.php'); 

$page = 'views/inicio.php';

if (isset($_GET['go'])) {
  $page = 'views/' . $_GET['go'] . '.php';
}

include_once($page);

include_once('views/components/final-html-pages.php');

?>