<?php

// echo 'editar.php?id=1&color=success&descripcion=Color verde';
// echo '<br/>';

$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

echo $id;
echo '<br>';
echo $color;
echo '<br>';
echo $descripcion;

include_once 'conexion.php';

$sql_editar = 'UPDATE colores SET color=?, descripcion=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($color, $descripcion, $id));

//cerrar conexión base de datos y sentencia
$pdo = null;
$sentencia_editar = null;

header('location:index.php');