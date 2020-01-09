<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/home_view.php');
    }elseif ($action=='mission') {
        include_once('view/mission.php');
    }
}else {
    include_once('view/home_view.php');
}