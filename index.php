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
    }
}else {
    include_once('view/home_view.php');
}