<?php

/**
 * Contrôleur de cette extraoridnaire application unique au monde.
 *
 * Exercice réalisé dans le cadre d'un TP de tests PHP à l'école Ynov.
 *
 * @author Catherine JULES
 * @date 01/07/2025
 */
$page = $_GET['page'] ?? '';

switch ($page) {
    case 'classique':
        include './views/calculatriceClassique.php';
        break;

    case 'binaire':
        include './views/calculatriceBinaire.php';
        break;

    default:
        echo "<h1>Bonjour ! Bienvenue ! :)</h1>";

        echo "<p>Veuillez choisir une des deux calculatrices :</p>";

        echo "<ul>";

        echo "<li><a href='?page=binaire'>Calculatrice Binaire</a></li>";
        echo "<li><a href='?page=classique'>Calculatrice Classique</a></li>";

        echo "</ul>";
        break;
}
