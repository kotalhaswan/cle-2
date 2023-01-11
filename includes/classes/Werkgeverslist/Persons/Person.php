<?php namespace Werkgeverslist\Persons;

/**
 * Class Person
 */
class Person
{
    public string $naam;
    public int $id;
    public string $email = '';
    public string $telefoonnummer = '';
    public string $vakgebied = '';

    /**
     * @param \PDO $db
     * @return bool
     */
    public function update(\PDO $db): bool
    {
        $query = 'UPDATE werkgevers
                  SET naam = :naam, email = :email, telefoonnummer = :telefoonnummer, vakgebied = :vakgebied
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':name' => $this->naam,
            ':email' => $this->email,
            ':telefoonnummer' => $this->telefoonnummer,
            ':vakgebied' => $this->vakgebied,
            ':id' => $this->id
        ]);
    }

    /**
     * @param \PDO $db
     * @return bool
     */

    /**
     * Save a album to the database
     *
     * @param Werkgever $werkgever
     * @param \PDO $db
     * @return bool
     */
    public static function create(Werkgever $werkgever, \PDO $db): bool
    {
        $query = 'INSERT INTO `werkgevers`(`id`, `naam`, `email`, `telefoonnummer`, `vakgebied`)
                  VALUES (:id, :naam, :email, :telefoonnummer, :vakgebied)';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':id' => $werkgever->id,
            ':naam' => $werkgever->naam,
            ':email' => $werkgever->email,
            ':telefoonnummer' => $werkgever->telefoonnummer,
            ':vakgebied' => $werkgever->vakgebied,
        ]);
    }

    /**
     * Get all albums from the database
     *
     * @param \PDO $db
     * @return Werkgever[]
     */
    public static function getAll(\PDO $db): array
    {
        return $db->query('SELECT * FROM werkgevers')->fetchAll(\PDO::FETCH_CLASS, '\\Werkgeverslist\\Persons\\Person');
    }

    /**
     * Get a specific album by its ID
     *
     * @param int $id
     * @param \PDO $db
     * @return Werkgever
     * @throws \Exception
     */
    public static function getById(int $id, \PDO $db): Person
    {
        $statement = $db->prepare('SELECT * FROM werkgevers WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($werkgever = $statement->fetchObject('\\Werkgeverslist\\Persons\\Person')) === false) {
            throw new \Exception('Werkgever ID is not available in the database');
        }

        return $werkgever;
    }


}