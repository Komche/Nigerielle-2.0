<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/home_view1.php');
    }elseif ($action=='mission1') {
        include_once('view/mission1.php');
    }elseif ($action=='home') {
        include_once('view/galerie.php');
    }
}else {
    include_once('view/home_view1.php');
}