<?php
session_start();
require_once __DIR__ . '/../pages/db.php';

// Check if email and password are set
if (!isset($_POST['email'], $_POST['password'])) {
    $_SESSION['message'] = 'Vul zowel uw e-mailadres als wachtwoord in.';
    header('Location: /login-form');
    exit();
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
$stmt = $conn->prepare('SELECT id, password FROM account WHERE email = ?');
$stmt->bind_param('s', $_POST['email']);
$stmt->execute();
// Store the result so we can check if the account exists in the database.
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();
    // Account exists, now we verify the password.
    if (password_verify($_POST['password'], $password)) {
        // Verification success! User has logged in!
        // Create sessions so we know the user is logged in.
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id'] = $id;
        header('Location: /'); // Redirect to home page
        exit();
    } else {
        // Incorrect password
        $_SESSION['message'] = 'Ongeldige e-mail of wachtwoord.';
        header('Location: /login-form');
        exit();
    }
} else {
    // Incorrect email
    $_SESSION['message'] = 'Ongeldige e-mail of wachtwoord.';
    header('Location: /login-form');
    exit();
}

$stmt->close();
?>
