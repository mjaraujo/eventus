<?php

error_reporting(E_ALL);
require_once '../config/DB.php';

$insert = "INSERT INTO events (name, start, end) VALUES (:name, :start, :end)";

$stmt = config\DB::prepare($insert);

$stmt->bindParam(':start', $_POST['start']);
$stmt->bindParam(':end', $_POST['end']);
$stmt->bindParam(':name', $_POST['name']);

$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Created!';

header('Content-Type: application/json');
echo json_encode($response);

?>
