<?php
function getOracleConnection() {
    $hostname = 'localhost';
    $port = '1521';
    $service_name = 'freepdb1';
    $username = 'hr';
    $password = 'oracle';

    $conn = oci_connect($username, $password, "(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=$hostname)(PORT=$port))(CONNECT_DATA=(SERVICE_NAME=$service_name)))");

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    return $conn;
    
}

?>