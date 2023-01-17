
<?php
/** @var Werkgeverslist\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}
?>
<p>testpagina</p>
<td><a href="logout">Log uit</a></td>
