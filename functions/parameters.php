<?php

// Demarre la session
session_start();

// Session pour l'identification des utilisateurs
if (!isset($_SESSION['id'])) {
    $_SESSION['id'] = null;
    $_SESSION['username'] = null;
    $_SESSION['role'] = null;
}

// pour les messages d'erreurs
$data = [
    'reponse' => null,
    'message' => ''
];

// fonction pour verifier les valeurs envoyer en POST
function validateForm($value) {
    if (!isset($value)) {
        return false;
    }

    if (empty($value)) {
        return false;
    }

    return true;
}