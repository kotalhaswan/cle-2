<?php
//TEMP script just to create a user.
$db = new \Werkgeverslist\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$user = new \Werkgeverslist\Users\User();
$user->email = 'admin@hotmail.com';
$user->password = password_hash('admin', PASSWORD_DEFAULT);
$user->name = 'admin';
\Werkgeverslist\Users\User::create($user, $db->getConnection());
exit;
