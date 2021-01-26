<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido.");
  }

  $_SESSION['message'] = 'Nota eliminada con éxito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
