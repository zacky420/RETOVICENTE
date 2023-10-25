<?php

// Ruta al archivo de texto
$archivo = './RETOVICENTE/c1.csv';

// Inicializa un arreglo para almacenar las sumas
$sumas = [];

// Abre el archivo para lectura
$handle = fopen($archivo, 'r');

if ($handle) {
    $suma = 0; // Inicializa una variable para la suma actual
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES); // Lee el archivo y elimina saltos de línea

    for ($i = 0; $i < count($lineas); $i++) {
        $linea = $lineas[$i];
        if (trim($linea) === '') {
            $sumas[] = $suma;
            $suma = 0; // Reinicia la suma
        } else {
            // Agrega el valor de la línea a la suma actual
            $valor = intval(trim($linea));
            $suma += $valor;
        }
    }

    // Agrega la última suma si no se encuentra en una línea en blanco al final del archivo
    $sumas[] = $suma;

    // Cierra el archivo
    fclose($handle);
    
    // Encuentra la suma máxima y su posición
    $maxSuma = max($sumas);
    $maxPosition = array_search($maxSuma, $sumas);

    echo "El duende que lleva más calorías tiene: $maxSuma calorías y se encuentra en la posición $maxPosition";
} else {
    echo "No se pudo abrir el archivo CSV.";
}

?>
