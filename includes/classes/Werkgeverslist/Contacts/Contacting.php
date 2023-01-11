<?php
namespace Werkgeverslist\Contacts;
class Contacting
{
    /**
     * Class Contacting
     * @package Werkgeverslist\Contacts
     */
    public string $naam;
    public int $id;
    public string $email = '';
    public string $telefoonnummer = '';
    public string $woonplaats = '';
    public string $reden = '';

    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM contact
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }

    public static function getAll(\PDO $db): array
    {
        return $db->query('SELECT * FROM contact')->fetchAll(\PDO::FETCH_CLASS, '\\Werkgeverslist\\Contacts\\Contacting');
    }

    public function update(\PDO $db): bool
    {
        $query = 'UPDATE contact
                  SET naam = :naam, email = :email, telefoonnummer = :telefoonnummer, woonplaats = :woonplaats, reden = :reden
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':naam' => $this->naam,
            ':email' => $this->email,
            ':telefoonnummer' => $this->telefoonnummer,
            ':woonplaats' => $this->woonplaats,
            ':reden' => $this->reden,
            ':id' => $this->id
        ]);
    }
    /**
     * Save a album to the database
     *
     * @param Contacting $contact
     * @param \PDO $db
     * @return bool
     */
    public static function create(Contacting $contact, \PDO $db): bool
    {
        $query = 'INSERT INTO contact (id, naam, email, telefoonnummer, woonplaats, reden)
                  VALUES (:user_id, :naam, :email, :telefoonnummer, :woonplaats, :reden)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':id' => $contact->id,
            ':naam' => $contact->naam,
            ':email' => $contact->email,
            ':telefoonnummer' => $contact->telefoonnummer,
            ':woonplaats' => $contact->woonplaats,
            ':reden' => $contact->reden,
        ]);
    }

    /**
     * Get a specific contact by its ID
     *
     * @param int $id
     * @param \PDO $db
     * @return Contacting
     * @throws \Exception
     */
    public static function getById(int $id, \PDO $db): Contacting
    {
        $statement = $db->prepare('SELECT * FROM contact WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($contactgever = $statement->fetchObject('\Werkgeverslist\Contacts\Contacting')) === false) {
            throw new \Exception('Contact ID is not available in the database');
        }

        return $contactgever;
    }
}