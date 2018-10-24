<?php

$pdo = new PDO('sqlite:../SQLite/php.db');

$sql = "INSERT into users (email, username, password) VALUES ("noahcwoods@gmail.com", "noahcwoods", "testpass")";

$myPDO->query($sql);

echo "1234";

 ?>
