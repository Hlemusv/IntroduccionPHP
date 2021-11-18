<?php include 'includes/header.php';
$cliente = [
  'nombre' => 'Hamilton', 
  'saldo' => 200,
  'informacion' => [
      'tipo' => 'premium', 
      'disponible' => 100
  ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

echo $cliente['nombre'];
echo $cliente['informacion']['disponible'];
//agregar valor que no existe 
$cliente['codigo'] = 1209192012;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';