<?php
//Set default empty contact & load POST logic
$contact = new \Werkgeverslist\Contacts\Contacting();
require_once dirname(__FILE__) . '/../includes/contact-post-data.php';


//Database magic when no errors are found
if (isset($formData) && empty($errors)) {

    //Init the database
    $db = new \Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if (\Werkgeverslist\Contacts\Contacting::create($contact, $db->getConnection())) {
        $success = 'Email verstuurd!';
        //Override to see a new empty form
        $contact = new \Werkgeverslist\Contacts\Contacting('', '', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}

//Default page title
$pageTitle = 'Create afspraak';