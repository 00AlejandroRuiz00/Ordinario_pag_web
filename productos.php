<?php
// Simulación de productos
$productos = [
    'Camisas' => [
        ['POLO' => 'Camisa Blanca', 'precio' => 25, 'imagen' => 'IMAGEN_01.jpeg'],
        ['nombre' => 'Camisa Azul', 'precio' => 30, 'imagen' => 'camisa_azul.jpg'],
        ['nombre' => 'Camisa a Rayas', 'precio' => 35, 'imagen' => 'camisa_rayas.jpg'],
        ['nombre' => 'Camisa Negra', 'precio' => 30, 'imagen' => 'camisa_negra.jpg'],
        ['nombre' => 'Camisa de Cuadros', 'precio' => 30, 'imagen' => 'camisa_cuadros.jpg']
    ],
    'Pantalones' => [
        ['nombre' => 'Pantalón de Mezclilla', 'precio' => 40, 'imagen' => 'pantalon_mezclilla.jpg'],
        ['nombre' => 'Pantalón de Vestir', 'precio' => 50, 'imagen' => 'pantalon_vestir.jpg'],
        ['nombre' => 'Pantalón Casual', 'precio' => 45, 'imagen' => 'pantalon_casual.jpg'],
        ['nombre' => 'Pantalón Deportivo', 'precio' => 35, 'imagen' => 'pantalon_deportivo.jpg'],
        ['nombre' => 'Pantalón Corto', 'precio' => 25, 'imagen' => 'pantalon_corto.jpg']
    ],
    'Zapatos' => [
        ['nombre' => 'Zapatos Formales', 'precio' => 60, 'imagen' => 'zapatos_formales.jpg'],
        ['nombre' => 'Zapatos Casuales', 'precio' => 50, 'imagen' => 'zapatos_casuales.jpg'],
        ['nombre' => 'Zapatos Deportivos', 'precio' => 55, 'imagen' => 'zapatos_deportivos.jpg'],
        ['nombre' => 'Zapatos de Tacón', 'precio' => 45, 'imagen' => 'zapatos_tacon.jpg'],
        ['nombre' => 'Zapatillas', 'precio' => 40, 'imagen' => 'zapatillas.jpg']
    ]
];

foreach ($productos as $categoria => $productos_categoria) {
    echo "<h2>$categoria</h2>";
    foreach ($productos_categoria as $producto) {
        echo "<div class='producto'>";
        echo "<img src='../images/{$producto['imagen']}' alt='{$producto['nombre']}'>";
        echo "<p>{$producto['nombre']}</p>";
        echo "<p>Precio: ${$producto['precio']}</p>";
        echo "<button onclick='agregarProducto(\"{$producto['nombre']}\", {$producto['precio']})'>Agregar al Carrito</button>";
        echo "</div>";
    }
}
?>
