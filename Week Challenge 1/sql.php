<?php
$host="127.0.0.1";
$db_username="22005405";
$db_password="l0ck3r";
$db_name="AR22005405";

$conn = new mysqli($host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
};
?>