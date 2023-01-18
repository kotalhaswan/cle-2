<?php

//Init the database
$db = new \Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

try {
    //Get the record from the db
    $contact = \Werkgeverslist\Contacts\Contact::getById($_GET['id'], $db->getConnection());

    //Override logic for POST
    require_once dirname(__FILE__) . '/../includes/contact-post-data.php';

    //Database magic when no errors are found
    if (isset($formData) && empty($errors)) {

        //Save the record to the db
        if ($contact->update($db->getConnection())) {
            $success = 'Contact succesvol aangepast!';
        } else {
            $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
        }
    }

    //Default page title
    $pageTitle = 'Edit ' . $contact->naam;
} catch (Exception $e) {
    //Something went wrong on this level
    $errors[] = $e->getMessage();
    $pageTitle = 'Contact does\'t exist';
}
