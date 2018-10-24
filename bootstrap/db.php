<?php

$db = new SQLite3('../SQLite/php.db');
$db->exec("INSERT into users (email, username, password) VALUES ('noahcwoods@gmail.com', 'noahcwoods', 'testpass')");

echo "hello";

?>
