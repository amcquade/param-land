<?php

function printTableFromResult($result)
{
    $html = '';
    $html .= "<table class='table table-dark table-striped' border='1'>";
    $html .= "<thead><tr><th scope='col'>id</th><th scope='col'>data</th><th scope='col'>value</th></tr></thead>";
    $html .= "<tbody>";

    // get all records 
    $lines = pg_fetch_all($result);
    foreach ($lines as $line) {

        // get each record one by one
        // while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        $html .= "<tr>";
        foreach ($line as $i => $col_value) {
            $scope = '';
            if ($i == 'id') {
                $scope = "scope='row'";
            }
            $html .= "<td $scope >$col_value</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tbody>";
    $html .= "</table>";
    return $html;
}
