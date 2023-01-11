<?php

namespace Werkgeverslist\Contactgroup;
use Werkgeverslist\Contacts\Contact;


class allContacts implements Contactgroepje
{

    /**
     * @return Contact[]
     */
    public function getContact(): array
    {
        return $this->contactgevers;
    }

    /**
     * Retrieve raw array value & pass to Student object
     *
     * @param Contact[] $contactgevers
     * @throws \Exception
     */
    public function setContact(array $contactgevers): void
    {
        $this->contactgevers = $contactgevers;
    }

    /**
     * @return int
     */
    public function getTotalContact(): int
    {
        return count($this->contactgevers);
    }
}