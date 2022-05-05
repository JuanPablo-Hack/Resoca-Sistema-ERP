<?php
  include_once 'conexion.php';

  $fechai = strftime("%d-%m-%Y", strtotime($_POST['fechai']));
  $fechaf = strftime("%d-%m-%Y", strtotime($_POST['fechaf']));

  $sql = "SELECT SUM(cantidad) AS total FROM ordenes WHERE fecha BETWEEN '$fechai' AND '$fechaf'";
  $resultado = $conexion -> query($sql);
  $data = $resultado -> fetch_assoc();

  echo json_encode($data);
?>