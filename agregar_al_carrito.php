<?php
session_start();

if (isset($_POST['nombre']) && isset($_POST['precio'])) {
    $producto = [
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio']
    ];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = $producto;
}

header('Location: ../frontend/index.html');
exit();
?>
