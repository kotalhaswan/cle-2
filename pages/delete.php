<?php

//Init the database
$db = new  Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$contactgever = Werkgeverslist\Contacts\Contacting::getById($_GET['id'], $db->getConnection());

//Only execute delete when confirmed
if (isset($_GET['continue'])) {


    //Save the record to the db
    $contactgever->delete($db->getConnection());

    //Redirect to homepage after deletion & exit script
    header('Location: adminpagina');
    exit;
}