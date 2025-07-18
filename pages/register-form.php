<?php 
$root_path = $_SERVER['DOCUMENT_ROOT'];
require $root_path . "/includes/header.php"; 
?>
<main>
    <?php if (isset($_SESSION['id'])): ?>
        
        <div class="white-background">
            <h1>Mijn Account</h1>
            
            <?php
           
            
            $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'john.doe@example.com';
            $name_parts = explode('@', $email);
            $name = ucwords(str_replace('.', ' ', $name_parts[0]));
            
            $user = [
                'id' => $_SESSION['id'],
                'name' => $name,
                'email' => $email,
                'phone' => '+31 6 12345678',
                'address' => 'Voorbeeldstraat 123',
                'city' => 'Amsterdam',
                'postal_code' => '1012 AB'
            ];
            ?>
            
            <div class="account-section">
                <h2>Persoonlijke gegevens</h2>
                
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="message success">
                        <?= htmlspecialchars($_SESSION['message']) ?>
                </div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>
                
                <?php
                // Haal gebruikersgegevens op uit de database
                require_once __DIR__ . '/../pages/db.php';
                $user_id = $_SESSION['id'];
                $stmt = $conn->prepare("SELECT * FROM account WHERE id = ?");
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $user_data = $result->fetch_assoc();
                
                $email = $user_data['email'];
                $name_parts = explode('@', $email);
                $name = ucwords(str_replace('.', ' ', $name_parts[0]));
                ?>
                
                <form class="account-form" method="post" action="/actions/update-account.php">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mailadres</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" id="phone" name="phone" value="Nog niet ingevuld" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Adres</label>
                        <input type="text" id="address" name="address" value="Nog niet ingevuld" readonly>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">Stad</label>
                            <input type="text" id="city" name="city" value="Nog niet ingevuld" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="postal_code">Postcode</label>
                            <input type="text" id="postal_code" name="postal_code" value="Nog niet ingevuld" readonly>
                        </div>
                    </div>
                    
                    <button type="button" id="edit-btn" class="button-primary">Gegevens wijzigen</button>
                    <button type="submit" id="save-btn" class="button-primary" style="display: none;">Opslaan</button>
                </form>
            </div>
            
            <div class="account-section">
                <h2>Mijn reserveringen</h2>
                <p>U heeft nog geen actieve reserveringen.</p>
            </div>
        </div>
        
        <script>
        document.getElementById('edit-btn').addEventListener('click', function() {
            
            const inputs = document.querySelectorAll('.account-form input');
            inputs.forEach(input => {
                input.removeAttribute('readonly');
            });
            
            
            document.getElementById('edit-btn').style.display = 'none';
            document.getElementById('save-btn').style.display = 'block';
        });
        </script>
    <?php else: ?>
        
        <form action="/register-handler" method="post" class="account-form">
            <h2>Maak een account aan</h2>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message">
                    <?= $_SESSION['message'] ?>
                </div>
                <?php
                session_destroy();
                 endif; ?>
            <label for="email">Uw e-mail</label>
            <input type="email" name="email" id="email" placeholder="johndoe@gmail.com" value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '' ?>" required autofocus>
            <label for="password">Uw wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="Uw wachtwoord" required>
            <label for="confirm-password">Herhaal wachtwoord</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Uw wachtwoord" required>
            <input type="submit" value="Maak account aan" class="button-primary">
            
            <p style="text-align: center; margin-top: 20px;">
                Heeft u al een account? <a href="/pages/login.php">Inloggen</a>
            </p>
        </form>
    <?php endif; ?>
</main>

<?php require $root_path . "/includes/footer.php"; ?>
