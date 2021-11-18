<?php include 'includes/header.php';
$nombreCliente = "Hamilton en caracteres";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo en minusculas y el ejemplo
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Hamilton', 'reemplazado', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'milton');

$tipoCliente = "lo mejor del mundo";

echo "<br>";
// tipo uno para los templates string
echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
// tipo dos para concatenar archivos
echo "El Cliente {$nombreCliente} es ${tipoCliente} ";



include 'includes/footer.php';