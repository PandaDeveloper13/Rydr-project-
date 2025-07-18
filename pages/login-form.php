<?php 
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php"; 
?>
<main>
    <form action="/login-handler" class="account-form" method="post">
        <h2>Log in</h2>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="succes-message"><?= $_SESSION['success'] ?></div>
            <?php unset($_SESSION['success']); ?>
        <?php } ?>
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="message"><?= htmlspecialchars($_SESSION['message']) ?></div>
            <?php unset($_SESSION['message']); ?>
        <?php } ?>
        <label for="email">Uw e-mail</label>
        <input type="email" name="email" id="email" placeholder="johndoe@gmail.com" value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '' ?>" required autofocus>
        <label for="password">Uw wachtwoord</label>
        <input type="password" name="password" id="password" placeholder="Uw wachtwoord" required>
        <input type="submit" value="Log in" class="button-primary">
    </form>
</main>

<?php require $root_path . "/includes/footer.php"; ?>
