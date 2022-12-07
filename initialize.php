<?php
require_once 'settings.php';
require_once 'Werkgeverslist/Databases/Database.php';
require_once 'Werkgeverslist/Workgroup/Werkgroep.php';
require_once 'Werkgeverslist/Workgroup/equansWerkers.php';
require_once 'Werkgeverslist/Persons/Person.php';
require_once 'Werkgeverslist/Persons/Werkgever.php';



try {

    $db = new Werkgeverslist\Databases\Database
    (DB_HOST, DB_USER,DB_PASS, DB_NAME);
    $connection = $db ->getConnection();

    //Get students from database
    $query = 'SELECT * FROM werkgevers';
    $werkgeversFromDB = $connection->query($query)
        ->fetchAll(PDO::FETCH_CLASS, '\\Werkgeverslist\\Persons\\Werkgever');

    //Create new instance for class & add students
    $equansWerkers = new \Werkgeverslist\Workgroup\equansWerkers();
    $equansWerkers->setWorkers($werkgeversFromDB);


    //Get variables for template
    $werkgevers = $equansWerkers->getWorkers();
    $totalWerkgevers = $equansWerkers->getTotalWorkers();

} catch (Exception $e) {
    //Set error variable for template
    $error = 'Oops, try to fix your error please: ' .
        $e->getMessage() . ' on line ' . $e->getLine() . ' of ' .
        $e->getFile();
}

