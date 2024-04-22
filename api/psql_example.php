<?php

echo 'hello friend ! here are results from postgres :) ';
$host        = "host=database";
$dbname      = "dbname=database";
$credentials = "user=postgres";
$connectionStr = "$host $dbname $credentials";

// see lando file for creds
$dbconn = pg_connect($connectionStr)
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = "SELECT id, data -> 'people' FROM params WHERE data ->> 'country' IN ('usa') ";
$result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table class='table table-dark table-striped' border='1'>";
echo "<thead><tr><th scope='col'>id</th><th scope='col'>data</th></tr></thead>";
echo "<tbody>";

// get all records 
$lines = pg_fetch_all($result);
foreach ($lines as $line) {

    // get each record one by one
    // while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<tr>";
    foreach ($line as $i => $col_value) {
        $scope = '';
        if ($i == 'id') {
            $scope = "scope='row'";
        }
        echo "<td $scope >$col_value</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
