<?php
session_start();
include './conexion.php';
login($conexion, $_POST['user'], sha1($_POST['contra']));
function login($conexion, $user, $password)
{
    $sql = "SELECT * FROM admin WHERE user='$user' and contra='$password'";
    $resultado = $conexion->query($sql);
    if ($row = mysqli_fetch_assoc($resultado)) {
        header("HTTP/1.1 302 Moved Temporarily");
        header("Location: ../Admin/index.php");
    } else {
        $sql = "SELECT * FROM trabajador WHERE user='$user' and pwd='$password'";
        $resultado = $conexion->query($sql);
        if ($row = mysqli_fetch_assoc($resultado)) {
            $_SESSION['usuario'] = $row['id'];
            header("HTTP/1.1 302 Moved Temporarily");
            header("Location: ../Trabajdor/index.php");
        } else {
            $sql = "SELECT * FROM clientes WHERE user='$user' and pwd='$password'";
            $resultado = $conexion->query($sql);
            if ($row = mysqli_fetch_assoc($resultado)) {
                $_SESSION['usuario'] = $row['id'];
                header("HTTP/1.1 302 Moved Temporarily");
                header("Location: ../Cliente/index.php");
            } else {
                echo "No tiene usuario";
            }
        }
    }
}
