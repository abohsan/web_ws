<?php
session_start();

$sourceDir = opendir('../sidbar1/languages');
$langArray = [];

while (($entry = readdir($sourceDir)) != FALSE) {
    if ($entry != '.' && $entry != '..') {
        $entry =  substr($entry, 0, -4);
        $langArray[] =  $entry;
    }
}

if (in_array($_GET['lang'], $langArray)) {
    $_SESSION['lang'] = $_GET['lang'];
    require_once '../sidbar1/languages/' . $_SESSION['lang'] . '.php';
} else {
    if (isset($_SESSION['lang'])) {
        require_once '../sidbar1/languages/' . $_SESSION['lang'] . '.php';
    } else {
        $_SESSION['lang'] = 'ar';
        require_once '../sidbar1/languages/' . $_SESSION['lang'] . '.php';
    }
}
