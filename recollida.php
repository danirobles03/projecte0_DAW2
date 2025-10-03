<?php
$json = file_get_contents('data.json');
$dades = json_decode($json, true);

echo "<h1>Preguntes disponibles</h1>";

foreach ($dades['preguntes'] as $pregunta) {
    echo "<div style='margin-bottom: 30px;'>";
    echo "<h2>" . htmlspecialchars($pregunta['pregunta']) . "</h2>";
    echo "<img src='" . htmlspecialchars($pregunta['imatge']) . "' alt='Bandera' style='width:200px;'><br>";

    echo "<ul>";
    foreach ($pregunta['respostes'] as $resposta) {
        echo "<li>" . htmlspecialchars($resposta['resposta']);
        if ($resposta['correcta']) {
            echo " ✅";
        }
        echo "</li>";
    }
    echo "</ul>";
    echo "</div>";
}

echo "</body></html>";
?>