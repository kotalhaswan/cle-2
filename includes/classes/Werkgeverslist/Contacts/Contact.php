<?php
namespace Werkgeverslist\Contacts;

class Contact extends Contacting
{
    public int $id;
    public string $naam;
    public string $email;
    public string $telefoonnummer;
    public string $woonplaats;
    public string $reden;

    private array $contact = [];

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->contact;
    }

    /**
     * @param array $contact
     */
    public function add(array $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return count($this->contact);
    }

}