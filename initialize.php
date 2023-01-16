<?php
require_once 'settings.php';
require_once 'vendor/autoload.php';

$session = new \Werkgeverslist\Utils\Session();

//Set variable for errors
$errors = [];

try {
    //Get the url from the .htaccess rewrite & check existence (if not: 404!)
    $currentPage = (!isset($_GET['_url']) || $_GET['_url'] == '' ? 'home' : $_GET['_url']);
    $phpFile = $currentPage . '.php';
    if (!file_exists(INCLUDES_PATH . 'pages/' . $phpFile)) {
        header('HTTP/1.0 404 Not Found');
        $phpFile = '404.php';
    }

    //Require file for logic
    require_once 'pages/' . $phpFile;

    //Use output buffers to capture template data from require statement and store in $content
    ob_start();
    require_once 'pages/templates/' . $phpFile;
    $content = ob_get_clean();
} catch (Exception $e) {
    //Set error
    die('Oops, try to fix your error please: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' of ' . $e->getFile());
}


