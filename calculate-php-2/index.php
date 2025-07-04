<?php
require_once __DIR__ . '/src/utils/BinaryCalculate.php';
use src\utils\BinaryCalculate;

$numA = '';
$numB = '';
$operateur = '';
$resultat = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numA = isset($_POST['a']) ? (int)$_POST['a'] : null;
    $numB = isset($_POST['b']) ? (int)$_POST['b'] : null;
    $operateur = isset($_POST['op']) ? $_POST['op'] : 'and';

    $calcul = new BinaryCalculate();

    switch (strtolower($operateur)) {
        case 'and':
            $resultat = $calcul->andBinaryCalcul($numA, $numB);
            break;
        case 'or':
            $resultat = $calcul->orBinaryCalcul($numA, $numB);
            break;
        case 'xor':
            $resultat = $calcul->xorBinaryCalcul($numA, $numB);
            break;
        default:
            $resultat = $calcul->andBinaryCalcul($numA, $numB);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice binaire</title>
</head>
<body>
    <h1>Calculatrice binaire</h1>
    <form method="post">
        <label for="a">Selectionnez un premier chiffre :</label>
        <input type="number" name="a" id="a" value="<?= htmlspecialchars($numA) ?>" required>

        <label for="b">Votre second chiffre :</label>
        <input type="number" name="b" id="b" value="<?= htmlspecialchars($numB) ?>" required>

        <label for="op">Choisir un opérateur :</label>
        <select name="op" id="op" required>
            <option value="">Options</option>
            <option value="and" <?= $operateur === 'and' ? 'selected' : '' ?>>AND</option>
            <option value="or" <?= $operateur === 'or' ? 'selected' : '' ?>>OR</option>
            <option value="xor" <?= $operateur === 'xor' ? 'selected' : '' ?>>XOR</option>
        </select>

        <button type="submit">Go !</button>
    </form>

    <?php if ($resultat !== null){ ?>
        <p>Résultat de <?= htmlspecialchars($operateur) ?> entre <?= $numA ?> et <?= $numB ?> :<br><?= $resultat ?></p>
        <p>Résultat en binaire : <?= decbin($resultat) ?></p>
    <?php }; ?>
</body>
</html>