<?php

/** @var Werkgeverslist\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}
$db = new Werkgeverslist\Databases\Database
(DB_HOST, DB_USER,DB_PASS, DB_NAME);
$connection = $db ->getConnection();

//Get students from database
$query = 'SELECT * FROM contact';
$contactgeversFromDB = $connection->query($query)
    ->fetchAll(PDO::FETCH_CLASS, '\\Werkgeverslist\\Contacts\\Contact');

//Create new instance for class & add students
$allContacts = new \Werkgeverslist\Contactgroup\allContacts();
$allContacts->setContact($contactgeversFromDB);


//Get variables for template
$contactgevers= $allContacts->getContact();
$totalContactgevers = $allContacts->getTotalContact();