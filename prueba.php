<?php
echo "Ejercio 1:";
echo "<br>";
$numeros_aleatorios = array();
for ($i = 0; $i < 10; $i++) {
    $numeros_aleatorios[] = rand(1,20);
}

echo "Numeros aleatorios sin ordenar: <br>";
print_r($numeros_aleatorios);
echo "<br>";

sort($numeros_aleatorios);

echo "Numeros aleatorios ordenados: <br>";
print_r($numeros_aleatorios);
echo "<br>";
echo "<br>";

echo "Ejercio 2:";
echo "<br>";
$texto = "Quitando los espacios";
$resultado = str_replace(' ','',$texto);
echo $resultado;
echo "<br>";
echo "<br>";

echo "Ejercicio 3:";
echo "<br>";
date_default_timezone_set('America/Mexico_City');
$fecha_p = date('d-m-Y H:i:s');
echo "Fecha actual: " . $fecha_p . "<br>";
$fecha_f = date('d-m-Y H:i:s', strtotime('+10 days +12 hours'));
echo "Fecha después de 10 días y 12 horas: " . $fecha_f;

?>