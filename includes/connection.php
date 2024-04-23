<?php

// define $connectionStr from db creds
require_once dirname(dirname(__FILE__)) . '/config.php';

$dbconn = pg_connect($connectionStr)
    or die('Could not connect: ' . pg_last_error());

// TODO: helper functions for making queries...
