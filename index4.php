<?php

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='home') {
        include_once('view/contact.php');
    }elseif ($action=='contact2') {
        include_once('view/contact2.php');
    }elseif ($action=='home') {
        include_once('view/contact.php');
    }
}else {
    include_once('view/contact.php');
}