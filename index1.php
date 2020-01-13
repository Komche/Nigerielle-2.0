<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/home_view.php');
    }elseif ($action=='Hanane') {
        include_once('view/Hanane.php');
    }
}else {
    include_once('view/home_view.php');
}