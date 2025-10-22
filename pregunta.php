<?php
session_start();

if (!isset($_SESSION['preguntes'])) {
    $json = file_get_contents('data.json');
    $dades = json_decode($json, true);
    shuffle($dades['preguntes']);
    $_SESSION['preguntes'] = array_slice($dades['preguntes'], 0, 10);
    $_SESSION['respostes'] = [];
    $_SESSION['actual'] = 0;
}


$actual = $_SESSION['actual'];
$pregunta = $_SESSION['preguntes'][$actual];

if ($actual >= count($_SESSION['preguntes'])) {
    header("Location: resultat.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resposta = intval($_POST['resposta']);
    $correcta = -1;

    foreach ($pregunta['respostes'] as $index => $r) {
        if ($r['correcta']) $correcta = $index;
    }

    $encertada = ($resposta === $correcta);
    $_SESSION['respostes'][] = $encertada;
    $_SESSION['actual']++;

    echo "<p>" . ($encertada ? "✅ Correcte!" : "❌ Incorrecte!") . "</p>";
    echo "<form method='get' action='pregunta.php'><button type='submit'>Següent</button></form>";

    if ($_SESSION['actual'] >= count($_SESSION['preguntes'])) {
    $respostes = $_SESSION['respostes'];
    $encerts = array_filter($respostes);
    echo "<h1>Resultat final</h1>";
    echo "<p>Has encertat " . count($encerts) . " de " . count($respostes) . " preguntes.</p>";
    echo "<form method='get'><button type='submit' name='reiniciar'>Tornar a començar</button></form>";
    exit;
}

if (isset($_GET['reiniciar'])) {
    session_destroy();
    header("Location: pregunta.php");
    exit;
}

}
?>

<h2><?php echo htmlspecialchars($pregunta['pregunta']); ?></h2>
<img src="<?php echo htmlspecialchars($pregunta['imatge']); ?>" style="width:200px"><br>

<form method="post">
<?php foreach ($pregunta['respostes'] as $index => $resposta): ?>
    <button type="submit" name="resposta" value="<?php echo $index; ?>">
        <?php echo htmlspecialchars($resposta['text']); ?>
    </button><br>
<?php endforeach; ?>
</form>