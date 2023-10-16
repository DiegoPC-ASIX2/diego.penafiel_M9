<?php
if (isset($_GET['hora']) && isset($_GET['minut']) && isset($_GET['segon'])) {
    $hora = intval($_GET['hora']);
    $minuo = intval($_GET['minut']);
    $segon = intval($_GET['segon']);

    if ($hora >= 0 && $hora <= 23 && $minuo >= 0 && $minut <= 59 && $segon >= 0 && $segon <= 59) {
        $novaHora = mktime($hora, $minut, $segon + 1);
        $novaHoraFormateada = date("H:i:s", $novaHora);

        echo "<h2>Resultat:</h2>";
        echo "Hora original: $hora:$minut:$segon<br>";
        echo "Hora un segon després: $novaHoraFormateada";
    } else {
        echo "Els valors no son vàlids.";
    }
} else {
    echo "Posa els valors de l'hora, minut y segon.";
}
?>
