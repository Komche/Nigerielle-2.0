<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/home_view.php');
    }elseif ($action=='mission') {
        include_once('view/mission_view.php');
    }elseif ($action=='objectif') {
        include_once('view/objectif_view.php');
    }elseif ($action=='valeurs') {
        include_once('view/valeurs_view.php');
    }elseif ($action=='activite') {
        include_once('view/activite_view.php');
    }elseif ($action=='engagement') {
        include_once('view/engagement_view.php');
    }elseif ($action=='contact') {
        include_once('view/contact_view.php');
    }elseif ($action=='galerie') {
        include_once('view/galerie_view.php');
    }elseif ($action=='Hanane') {
        include_once('view/Hanane_view.php');
    }elseif ($action=='actualite') {
        include_once('view/actualite_view.php');
    }
}else {
    include_once('view/home_view.php');
}