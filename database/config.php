<?php

$localhost_cleardb_url = "mysql://b8991fd1eabdd4:6e4547ca@us-cdbr-iron-east-02.cleardb.net/heroku_f019ad04541efac?reconnect=true";

if(!getenv("CLEARDB_DATABASE_URL")) {
putenv("CLEARDB_DATABASE_URL = $localhost_cleardb_url");

?>
