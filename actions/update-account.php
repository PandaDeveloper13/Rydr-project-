<?php
session_start();
require_once __DIR__ . '/../pages/db.php';

// Controleer of gebruiker is ingelogd
if (!isset($_SESSION['id'])) {
    header('Location: /pages/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['id'];
    
    // Haal de ingevoerde gegevens op
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    
    // Controleer of e-mail al bestaat (behalve voor huidige gebruiker)
    $check_email = $conn->prepare("SELECT id FROM account WHERE email = ? AND id != ?");
    $check_email->bind_param("si", $email, $user_id);
    $check_email->execute();
    $result = $check_email->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Dit e-mailadres is al in gebruik door een ander account.";
        header('Location: /pages/register-form.php');
        exit();
    }
    
    // Update de account gegevens
    // Eerst moeten we de account tabel uitbreiden met de nieuwe velden
    // Voor nu updaten we alleen email als die is gewijzigd
    $current_user = $conn->prepare("SELECT email FROM account WHERE id = ?");
    $current_user->bind_param("i", $user_id);
    $current_user->execute();
    $current_result = $current_user->get_result();
    $current_data = $current_result->fetch_assoc();
    
    if ($email !== $current_data['email']) {
        $update_email = $conn->prepare("UPDATE account SET email = ? WHERE id = ?");
        $update_email->bind_param("si", $email, $user_id);
        $update_email->execute();
    }
    
    $_SESSION['message'] = "Je gegevens zijn succesvol bijgewerkt!";
    $_SESSION['email'] = $email;
    header('Location: /pages/register-form.php');
    exit();
} else {
    header('Location: /pages/register-form.php');
    exit();
}
?> 