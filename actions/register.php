<?php
session_start();
require_once __DIR__ . '/../pages/db.php';

$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$password = $_POST["password"];
$confirm_password = $_POST["confirm-password"];

if ($password === $confirm_password) {
    $check_account = $conn->prepare("SELECT * FROM account WHERE email = ?");
    $check_account->bind_param("s", $email);
    $check_account->execute();
    $result = $check_account->get_result();

    if ($result->num_rows === 0) {
        //Extra hoge cost om nog beter te beveiligen
        $options = ['cost' => 14];
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT, $options);

        $create_account = $conn->prepare("INSERT INTO account (username, email, password) VALUES (?, ?, ?)");
        $create_account->bind_param("sss", $email, $email, $encrypted_password);
        $create_account->execute();

        $_SESSION["success"] = "Registratie is gelukt, log nu in:";
        header("Location: /login-form");
        exit();
    } else {
        $_SESSION["message"] = "Dit e-mailadres is al in gebruik.";
        $_SESSION["email"] = htmlspecialchars($email);
        header("Location: /register-form");
        exit();
    }
} else {
    $_SESSION["message"] = "Wachtwoorden komen niet overeen.";
    $_SESSION["email"] = htmlspecialchars($email);
    header("Location: register-form.php");
    exit();
}
