<?php
//Init the database
$db = new \Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

try {
    //Get the records from the db
    $werkgever = \Werkgeverslist\Persons\Person::getById($_GET['id'], $db->getConnection());

    //Default page title
    $pageTitle = $werkgever->naam;
} catch (Exception $e) {
    //Something went wrong on this level
    $errors[] = $e->getMessage();
    $pageTitle = 'Werkgever does\'t exist';
}
