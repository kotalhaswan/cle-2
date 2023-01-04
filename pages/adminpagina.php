<?php
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
