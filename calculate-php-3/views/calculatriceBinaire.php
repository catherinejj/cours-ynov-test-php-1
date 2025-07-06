<?php
require_once __DIR__ . '/../src/utils/BinaryCalculate.php';

use src\utils\BinaryCalculate;

class FormBinaire
{
    public int $numA=0, $numB=0, $resultat =0;
    public string $operateur = 'and';

    public function __construct(array $post)
    {
        isset($_POST['a']) ? $this->numA = $_POST['a'] : null;
        isset($_POST['b']) ? $this->numB = $_POST['b'] : null;
        isset($_POST['op']) ? $this->operateur = $_POST['op'] :null;
    }

    public function operateur(): void
    {
        if ($this->numA !== null && $this->numB !== null) {
            $calcul = new BinaryCalculate();

            switch (strtolower($this->operateur)) {
                case 'and':
                    $this->resultat = $calcul->andBinaryCalcul($this->numA, $this->numB);
                    break;
                case 'or':
                    $this->resultat = $calcul->orBinaryCalcul($this->numA, $this->numB);
                    break;
                case 'xor':
                    $this->resultat = $calcul->xorBinaryCalcul($this->numA, $this->numB);
                    break;
                default:
                    $this->resultat = $calcul->andBinaryCalcul($this->numA, $this->numB);
            }
        }
    }

    public function getA(): int
    { 
        return $this->numA; 
    }
    public function getB(): int{ 
        return $this->numB; 
    }
    public function getOperator(): string { 
        return $this->operateur; 
    }
    public function getResult(): int {
         return $this->resultat; 
    }
}


$form = new FormBinaire($_POST);
$form->operateur();
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
        <label for="a">Sélectionnez un premier chiffre :</label>
        <input type="number" name="a" id="a" value="<?= htmlspecialchars($form->getA() ?? '') ?>" required>

        <label for="b">Votre second chiffre :</label>
        <input type="number" name="b" id="b" value="<?= htmlspecialchars($form->getB() ?? '') ?>" required>

        <label for="op">Choisir un opérateur :</label>
        <select name="op" id="op" required>
            <option value="">Options</option>
            <option value="and" <?= $form->getOperator() === 'and' ? 'selected' : '' ?>>AND</option>
            <option value="or" <?= $form->getOperator() === 'or' ? 'selected' : '' ?>>OR</option>
            <option value="xor" <?= $form->getOperator() === 'xor' ? 'selected' : '' ?>>XOR</option>
        </select>

        <button type="submit">Go !</button>
    </form>

    <?php if ($form->getResult() !== null){ ?>
        <p>Résultat de <?= htmlspecialchars($form->getOperator()) ?> entre <?= $form->getA() ?> et <?= $form->getB() ?> :<br><?= $form->getResult() ?></p>
        <p>Résultat en binaire : <?= decbin($form->getResult()) ?></p>
    <?php } ?>
</body>
</html>