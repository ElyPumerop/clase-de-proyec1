<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '12345678',
  'datos_crud'
) or die(mysqli_erro($mysqli));

?>
