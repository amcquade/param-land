<?php

if (isset($_POST['path']) && !empty($_POST['path']) && isset($_POST['value']) && !empty($_POST['value'])) {
    require_once dirname(dirname(__FILE__)) . '/includes/connection.php';
    require_once dirname(dirname(__FILE__)) . '/includes/functions.php';

    // TODO: refactor this ?
    $query = "INSERT INTO params (
        data, value) VALUES (
        '{
          \"full_path\": \"{$_POST['path']}\"
        }'::jsonb, '{$_POST['value']}'::character varying)
         returning id;";

    $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());

    if (!empty($result)) {
        echo "Insert success: {$_POST['path']} => {$_POST['value']} ";
    }
} else {
    echo "invalid request :(";
}

if (!empty($dbconn)) {
    pg_close($dbconn);
}

exit;
