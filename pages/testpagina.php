<?php
/** @var Werkgeverslist\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}