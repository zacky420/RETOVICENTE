<?php
$duendes = array(1000, 2000, 3000, "", 4000, "", 5000, 6000, "", 7000, 8000, 9000, "", 10000);

$totalCalorias = 0; // Variable para acumular las calorías
$maxCalorias = 0;   // Variable para el máximo encontrado
$maxPosition = 0;   // Variable para la posición del máximo

for ($i = 0; $i < count($duendes); $i++) {
    $calorias = $duendes[$i];

    if ($calorias !== "") {
        $totalCalorias += $calorias; // Suma las calorías no vacías
    } else {
        if ($totalCalorias > $maxCalorias) {
            $maxCalorias = $totalCalorias; // Actualiza el máximo si es mayor
            $maxPosition = $i; // Almacena la posición del máximo
        }
        $totalCalorias = 0; // Reinicia la suma de calorías
    }
}

echo "El duende que lleva más calorías tiene: " . $maxCalorias . " y se encuentra en la posición " . $maxPosition;
