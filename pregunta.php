<?php
session_start();

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
    exit;
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