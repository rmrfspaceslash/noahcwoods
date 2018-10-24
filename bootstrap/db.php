<?php

$db = new SQLite3('../SQLite/php.db');

$sql = "INSERT into users (email, username, password) VALUES ("noahcwoods@gmail.com", "noahcwoods", "testpass")";

$db->exec($sql);

echo "hello";

 ?>
