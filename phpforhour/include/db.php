<?php

require "config.php";
extract($config['db']);

$conn = mysqli_connect($host, $user, $password, $dbname);

