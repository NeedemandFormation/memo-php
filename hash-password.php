<?php
// Hachage d'un mot de passe
$password = "monMotDePasseSecurise";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Affichage du mot de passe haché (à stocker en base de données)
echo "Mot de passe haché : " . $hashedPassword . "\n";

// Vérification d'un mot de passe saisi par l'utilisateur
$inputPassword = "monMotDePasseSecurise"; // Supposons que l'utilisateur entre ce mot de passe

if (password_verify($inputPassword, $hashedPassword)) {
    echo "Mot de passe valide !";
} else {
    echo "Mot de passe incorrect !";
}
