<?php
if (isset($_GET['numero']) && isset($_GET['numero1'])) {
    $numero1 = floatval($_GET['numero']);
    $numero2 = floatval($_GET['numero1']);

    $dif_num1 = abs(100 - $numero1);
    $dif_num2 = abs(100 - $numero2);

    if ($dif_num1 < $dif_num2) {
        echo "$numero1 és més proper a 100 que $numero2.";
    } elseif ($dif_num2 < $dif_num1) {
        echo "$numero2 és més proper a 100 que $numero1.";
    } else {
        echo "Ambdós números estan a la mateixa distància de 100.";
    }
} else {
    echo "Si us plau, introdueix els dos números.";
}
?>
