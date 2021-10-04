<?php 

include_once('views/layout/open-html-pages.php'); 
include_once('views/layout/header.php'); 
include_once('views/layout/nav.php'); 

$page = 'views/inicio.php';

if (isset($_GET['go'])) {
  $page = 'views/' . $_GET['go'] . '.php';
}

include_once($page);

include_once('views/layout/final-html-pages.php');

?>