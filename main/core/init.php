<?php
session_start();
$projectPath = $_SERVER['DOCUMENT_ROOT'];
spl_autoload_register(function ($class) {
    $projectPath = $_SERVER['DOCUMENT_ROOT'];
    $rootPath = $projectPath ;         
    require_once $rootPath . '/' . 'classes/' . $class . '.php';
});

$sourceDir = opendir($projectPath.'/languages');
$langArray = [];
while (($entry = readdir($sourceDir)) != FALSE) {
    if ($entry != '.' && $entry != '..') {
        $entry =  substr($entry, 0, -4);
        $langArray[] =  $entry;
    }
}

if (in_array($_POST['lang'], $langArray)) {
    $_SESSION['lang'] = $_POST['lang'];
    require_once $projectPath.'/'.'languages/' . $_SESSION['lang'] . '.php';
} else {
    if (isset($_SESSION['lang'])) {
        require_once $projectPath .'/'.'languages/' . $_SESSION['lang'] . '.php';
    } else {
        $_SESSION['lang'] = 'ar';
        require_once $projectPath .'/'.'languages/' . $_SESSION['lang'] . '.php';
    }
}
