<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['respostes']) || !is_array($input['respostes'])) {
    echo json_encode([
        "error" => "No s'han rebut respostes vàlides"
    ]);
    exit;
}

$preguntesJSON = file_get_contents('data.json');
$preguntesData = json_decode($preguntesJSON, true);

$preguntes = array_slice($preguntesData['preguntes'], 0, count($input['respostes']));

$correctes = 0;
foreach ($input['respostes'] as $i => $respostaIndex) {
    if (isset($preguntes[$i]['respostes'][$respostaIndex]['correcta']) &&
        $preguntes[$i]['respostes'][$respostaIndex]['correcta'] === true) {
        $correctes++;
    }
}

echo json_encode([
    "total" => count($input['respostes']),
    "correctes" => $correctes
]);