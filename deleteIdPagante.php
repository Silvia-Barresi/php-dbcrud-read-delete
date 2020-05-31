<?php


$server = 'localhost';
$userName = 'root';
$password = 'root';
$db = 'hotel_db';

$id = $_POST['id'];


if ($id) {
  $conn = new mysqli($server, $userName, $password, $db);

  if($conn -> connect_errno){

    echo json_encode($conn -> connect_errno);

    return;

  }

  $sql = "
        DELETE FROM paganti
        WHERE id = " . $id;

    $conn -> query($sql);
    $conn -> close();
}



 ?>
