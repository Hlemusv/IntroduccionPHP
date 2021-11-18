<?php include 'includes/header.php';
// While  itera cada uno del codigo mientras se cumpla la condicion

$i = 0; // Inicializador del incremento
// while primero revisa la condicion y luego ejecuta el coigo
while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While ejecuta primero el codigo y luego revisa la consdicion
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);



/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop.
// for($i = 1; $i < 1000; $i++ ):
//     if($i % 3 === 0 && $i % 5 === 0):
//         echo $i . " - FIZZ BUZZ <br/>";
//     elseif($i % 3 === 0):
//         echo $i . " - Fizz <br/>";
//     elseif($i % 5 === 0 ):
//         echo $i . " - Buzz <br/>";
//     else:
//         echo $i . "<br/>";
//     endif;
// endfor;


// For Each es bueno para los arreglos
$clientes = array('Pedro', 'Hamilton', 'Karen');

foreach( $clientes as $cliente ):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Hamilton',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;






include 'includes/footer.php';