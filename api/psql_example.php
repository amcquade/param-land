<?php

echo 'hello friend !';

// see lando file for creds
$dbconn = pg_connect("host=database dbname=database user=postgres")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = "SELECT id, data -> 'people' FROM params WHERE data ->> 'country'IN ('usa') ";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<br> results <br>";
// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
