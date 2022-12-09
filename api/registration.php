<?php
include('db_connection.php');
$data = file_get_contents("php://input");
echo $data;
