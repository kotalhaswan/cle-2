<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Set Form data
    $formData = new \Werkgeverslist\Form\Data($_POST);

    //Override object with new variables
    /** @var Contacting $contact */
    $contact->naam = $formData->getPostVar('naam');
    $contact->email = $formData->getPostVar('email');
    $contact->telefoonnummer = $formData->getPostVar('telefoonnummer');
    $contact->woonplaats = $formData->getPostVar('woonplaats');
    $contact->reden = $formData->getPostVar('reden');

    //Actual validation
    $validator = new \Werkgeverslist\Form\Validation\ContactValidator($contact);
    $validator->validate();
    $errors = $validator->getErrors();
}
