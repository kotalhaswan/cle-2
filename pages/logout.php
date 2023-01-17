<?php
/** @var Werkgeverslist\Utils\Session $session */
$session->destroy();
header('Location: login');
exit;
