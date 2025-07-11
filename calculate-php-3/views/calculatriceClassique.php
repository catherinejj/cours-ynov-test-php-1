<?php

namespace views;

require_once __DIR__ . '/../src/utils/CalculsClassique.php';
use src\utils\CalculsClassique;

class FormClassique
{
    public int $numA = 0;
    public int $numB = 0;
    public float $resultat = 0.0;
    public string $operateur = '+';

    public function __construct(int $numA, int $numB, string $operateur)
    {
        $this->numA = $numA;
        $this->numB = $numB;
        $this->operateur = $operateur;
    }

    public function operation(): void
    {
        if ($this->numA !== null && $this->numB !== null) {
            $calcul = new CalculsClassique();

            switch ($this->operateur) {
                case '+':
                    $this->resultat = $calcul->additionCalcul($this->numA, $this->numB);
                    break;
                case '-':
                    $this->resultat = $calcul->soustractionCalcul($this->numA, $this->numB);
                    break;
                case '*':
                    $this->resultat = $calcul->multiplicationCalcul($this->numA, $this->numB);
                    break;
                case '/':
                    $this->resultat = $calcul->divisionCalcul($this->numA, $this->numB);
                    break;
                default:
                    $this->resultat = $calcul->additionCalcul($this->numA, $this->numB);
            }
        }
    }

    public function getA(): int
    {
        return $this->numA;
    }
    public function getB(): int
    {
        return $this->numB;
    }
    public function getOperator(): string
    {
        return $this->operateur;
    }
    public function getResult(): float
    {
        return $this->resultat;
    }
}

$numA = isset($_POST['a']) ? (int)$_POST['a'] : 0;
$numB = isset($_POST['b']) ? (int)$_POST['b'] : 0;
$operateur = isset($_POST['op']) ? $_POST['op'] : 'and';

$form = new FormClassique($numA, $numB, $operateur);
$form->operation();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice classique</title>
</head>
<body>
    <h1>Calculatrice classique</h1>
    <form method="post">
        <label for="a">Sélectionnez un premier chiffre :</label>
    <input type="number" name="a" id="a" value="<?= htmlspecialchars($form->getA()) ?>" required>

    <label for="b">Votre second chiffre :</label>
    <input type="number" name="b" id="b" value="<?= htmlspecialchars($form->getB()) ?>" required>

     <label for="op">Choisir un opérateur :</label>
        <select name="op" id="op" required>
            <option value="">Options</option>
            <option value="+" <?= $form->getOperator() === '+' ? 'selected' : '' ?>>+</option>
            <option value="-" <?= $form->getOperator() === '-' ? 'selected' : '' ?>>−</option>
            <option value="*" <?= $form->getOperator() === '*' ? 'selected' : '' ?>>×</option>
            <option value="/" <?= $form->getOperator() === '/' ? 'selected' : '' ?>>÷</option>
        </select>

    <button type="submit">Go !</button>
</form>

<?php if (is_numeric($form->getResult())) { ?>
    <p>Résultat de <?= $form->getA() . ' ' . $form->getOperator() . ' ' . $form->getB() ?> = <strong><?= $form->getResult() ?></strong></p>
<?php } ?>
</body>
</html>