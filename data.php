<?php
include 'php/inc/database.php';
  $stmt = $conn->prepare('SELECT * FROM product');
  $stmt->execute();
  $results = $stmt->fetchAll(PDO::FETCH_OBJ);
  echo json_encode($results);
?>
