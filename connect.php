<?php
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'dbpassword';
$dbname = 'database';

$db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass);