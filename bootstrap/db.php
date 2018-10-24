<?php

$db = new PDO('sqlite:../SQLite/php.db');

$memory_db = new PDO('sqlite::memory:');

$sql = "INSERT into users (email, username, password) VALUES ("noahcwoods@gmail.com", "noahcwoods", "testpass")";

$sql = $db->prepare($sql);

$db->execute($sql);

 ?>
