<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/galerie.php');
    }elseif ($action=='galerie2') {
        include_once('view/galerie2.php');
    }elseif ($action=='home') {
        include_once('view/galerie.php');
    }
}else {
    include_once('view/galerie.php');
}