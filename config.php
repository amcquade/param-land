<?php

// defaults, see lando file
$host = "host=database";
$dbname = "dbname=database";
$credentials = "user=postgres";

// if using password...
// $credentials = "user=postgres password=";
$connectionStr = "$host $dbname $credentials";
