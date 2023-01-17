<?php
//If already logged in, no need to be here
/** @var Werkgeverslist\Utils\Session $session */
if ($session->keyExists('user')) {
    header('Location: adminpagina');
    exit;
}

//Validation
require_once dirname(__FILE__) . '/../includes/login-post-data.php';

//When no error, set session variable, redirect & exit script
/** @var Werkgeverslist\Users\User $user */
if (isset($formData) && empty($errors)) {
    $session->set('user', $user);
    header('Location: adminpagina');
    exit;
}

//Default page title
$pageTitle = 'Login';
