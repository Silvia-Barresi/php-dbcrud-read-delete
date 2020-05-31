<?php

header("Content-Type: application/json");

$server = 'localhost';
$userName = 'root';
$password = 'root';
$db = 'hotel_db';

$conn = new mysqli($server, $userName, $password, $db);

if($conn -> connect_errno){

  echo json_encode($conn -> connect_errno);

  return;

}

$sql = "
      SELECT id, name, lastname, address
      FROM paganti
";

$results = $conn -> query($sql);

$paganti = [];
if($results -> num_rows < 1 ){

  echo json_encode('Nothing to see');

} else{

  while($row = $results -> fetch_assoc()){

      $paganti[] = $row;

  }

  echo json_encode($paganti);
}


$conn -> close();






 ?>
