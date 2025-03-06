<?php
// Ce fichier permet de charger des variables d’environnement à partir de .env :

if (file_exists(__DIR__ . '/../.env')) {
    $lines = file(__DIR__ . '/../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        putenv(trim($line));
    }
}
