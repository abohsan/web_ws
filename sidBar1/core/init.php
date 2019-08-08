<?php
session_start();

$sourceDir = opendir('languages');

$langArray = [];



while (($entry = readdir($sourceDir)) != FALSE) {
    if ($entry != '.' && $entry != '..') {
        $entry =  substr($entry, 0, -4);
        $langArray[] =  $entry;
    }
}

if (in_array($_POST['lang'], $langArray)) {
    $_SESSION['lang'] = $_POST['lang'];
    require_once 'languages/' . $_SESSION['lang'] . '.php';
} else {
    if (isset($_SESSION['lang'])) {
        require_once 'languages/' . $_SESSION['lang'] . '.php';
    } else {
        $_SESSION['lang'] = 'ar';
        require_once 'languages/' . $_SESSION['lang'] . '.php';
    }
}


$sourceSidebars = opendir('sidebarsPHP');
$sidebarsArray = [];
$currentSidebar;
while (($entry = readdir($sourceSidebars)) != FALSE) {
    if ($entry != '.' && $entry != '..') {
        $entry =  substr($entry, 0, -4);
        $sidebarsArray[] =  $entry;
    }
}



