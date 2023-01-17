<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Set form data
    $formData = new \Werkgeverslist\Form\Data($_POST);

    //Set post variables
    $email = $formData->getPostVar('email');
    $password = $formData->getPostVar('password');

    //Init the database
    $db = new \Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Get the record from the db
    try {
        $user = \Werkgeverslist\Users\User::getByEmail($email, $db->getConnection());
    } catch (Exception $e) {
        $user = new \Werkgeverslist\Users\User();
    }

    //Actual validation
    $validator = new \Werkgeverslist\Form\Validation\LoginValidator($user, $password);
    $validator->validate();
    $errors = $validator->getErrors();
}
