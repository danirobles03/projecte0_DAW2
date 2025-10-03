<?php
session_start();

$respostes = $_SESSION['respostes'];
$encerts = array_filter($respostes);

echo "<h1>Resultat final</h1>";
echo "<p>Has encertat " . count($encerts) . " de " . count($respostes) . " preguntes.</p>";
?>

<form method="get" action="inici.php">
    <button type="submit">Tornar a començar</button>
</form>