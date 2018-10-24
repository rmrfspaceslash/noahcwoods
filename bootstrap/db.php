<?php

$pdo = new PDO('sqlite3:../SQLite/php.db');

$sql = "INSERT into users (email, username, password) VALUES ("noahcwoods@gmail.com", "noahcwoods", "testpass")";

$result = $myPDO->query($sql);

echo $result;

echo "1234";

 ?>
