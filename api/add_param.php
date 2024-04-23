<?php

if (isset($_POST['q']) && !empty($_POST['q'])) {
    require_once dirname(dirname(__FILE__)) . '/includes/connection.php';

    // Performing SQL query
    $query = "SELECT id, data -> 'people' FROM params WHERE data ->> 'country' IN ('" . $_POST['q'] . "') ";
    $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());
    $lines = pg_fetch_all($result);
    var_dump($lines);
} else {
    echo "invalid request :(";
}

if (!empty($dbconn)) {
    pg_close($dbconn);
}

exit;
