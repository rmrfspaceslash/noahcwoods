<?php

$db = new PDO('sqlite:../SQLite/php.db');

$sql = "INSERT into users (email, username, password) VALUES ("noahcwoods@gmail.com", "noahcwoods", "testpass")";

$db->execute($sql);

 ?>
