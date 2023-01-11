<?php namespace Werkgeverslist\Contactgroup;

use Werkgeverslist\Contacts\Contact;

interface Contactgroepje
{
    /**
     * @return array
     */
    public function getContact(): array;

    /**
     * @param Contact[] $contactgevers
     * @return void
     */
    public function setContact(array $contactgevers): void;
}