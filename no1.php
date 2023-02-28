<?php
$benda ="hoodie";

switch ($benda) {
    case "kemeja":
        echo "kemeja warna merah dengan harga RP.600.000,00", PHP_EOL;
    break;
    case "hoodie":
        echo "hoodie keluaran terbaru RP.200.000,00 ", PHP_EOL;
    break;
    case "jaket":
        echo "jaket keluaran terbaru RP.500.000,00 " , PHP_EOL;
    break;
    case "switter":
        echo "switter murah meriah RP.50.000,00 " , PHP_EOL;
    break;

    default: 
    echo "celana pendek harga RP.50.000,00" , PHP_EOL;
    break;
}