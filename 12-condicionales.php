<?php include 'includes/header.php';
$autenticado = true;
$admin = false;
// el operador o || es para que se umplan una de tananta condiciones y el && es para que se cumplan todas 
if($autenticado && $admin ) {
    echo "te has  autenticado correctamente";
} else {
    echo "oye pa donde vas gonorrea, inicia sesión";
}

// If anidados...
$cliente = [
    'nombre' => 'Hamilton',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";
// para negarla se pone ! y para afirmarla se que quita
if( !empty($cliente) ) {
    echo "El Arreglo de cliente no esta vacio";

    if($cliente['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";

// else if
if($cliente['saldo'] > 0 ) {
    echo "El Cliente tiene marmaja";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El Cliente tiene rosca";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}

// Switch.

echo "<br>";

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Emmm...';
        break;
    default:
        echo "Algún lenguaje que no se cual es";
        break;
}






include 'includes/footer.php';