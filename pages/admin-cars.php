<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/cars-db.php';


session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /pages/login.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                addCar($_POST);
                break;
            case 'edit':
                updateCar($_POST);
                break;
            case 'delete':
                deleteCar($_POST['car_id']);
                break;
        }
    }
}


function addCar($data) {
    global $conn;
    
    $sql = "INSERT INTO cars (auto, type, liter, versnellingsbak, passagiers, prijs, bedrijfswagen) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $bedrijfswagen = isset($data['bedrijfswagen']) ? 1 : 0;
    $stmt->bind_param("ssdsidi", $data['auto'], $data['type'], $data['liter'], $data['versnellingsbak'], $data['passagiers'], $data['prijs'], $bedrijfswagen);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Auto succesvol toegevoegd!";
    } else {
        $_SESSION['error'] = "Fout bij toevoegen auto: " . $stmt->error;
    }
    
    header("Location: /pages/admin-cars.php");
    exit;
}


function updateCar($data) {
    global $conn;
    
    $sql = "UPDATE cars SET auto = ?, type = ?, liter = ?, versnellingsbak = ?, passagiers = ?, prijs = ?, bedrijfswagen = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $bedrijfswagen = isset($data['bedrijfswagen']) ? 1 : 0;
    $stmt->bind_param("ssdsidii", $data['auto'], $data['type'], $data['liter'], $data['versnellingsbak'], $data['passagiers'], $data['prijs'], $bedrijfswagen, $data['car_id']);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Auto succesvol bijgewerkt!";
    } else {
        $_SESSION['error'] = "Fout bij bijwerken auto: " . $stmt->error;
    }
    
    header("Location: /pages/admin-cars.php");
    exit;
}


function deleteCar($id) {
    global $conn;
    
    $sql = "DELETE FROM cars WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        $_SESSION['message'] = "Auto succesvol verwijderd!";
    } else {
        $_SESSION['error'] = "Fout bij verwijderen auto: " . $stmt->error;
    }
    
    header("Location: /pages/admin-cars.php");
    exit;
}


$cars = getCars(false, false); 
$car_types = getCarTypes();
?>

<main class="admin-page">
    <div class="container">
        <div class="admin-header">
            <h1>Auto Beheer</h1>
            <p>Beheer alle auto's in het systeem</p>
        </div>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_SESSION['message']) ?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-error">
                <?= htmlspecialchars($_SESSION['error']) ?>
                <?php unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        
        <div class="admin-section">
            <h2>Nieuwe Auto Toevoegen</h2>
            <form method="POST" class="admin-form">
                <input type="hidden" name="action" value="add">
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="auto">Auto naam</label>
                        <input type="text" id="auto" name="auto" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select id="type" name="type" required>
                            <option value="">Selecteer type</option>
                            <?php foreach ($car_types as $type): ?>
                                <option value="<?= htmlspecialchars($type) ?>"><?= htmlspecialchars($type) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="liter">Motor (liter)</label>
                        <input type="number" id="liter" name="liter" step="0.1" min="0" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="versnellingsbak">Versnellingsbak</label>
                        <select id="versnellingsbak" name="versnellingsbak" required>
                            <option value="">Selecteer versnellingsbak</option>
                            <option value="Handgeschakeld">Handgeschakeld</option>
                            <option value="Automaat">Automaat</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="passagiers">Aantal passagiers</label>
                        <input type="number" id="passagiers" name="passagiers" min="1" max="9" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="prijs">Prijs per dag (€)</label>
                        <input type="number" id="prijs" name="prijs" step="0.01" min="0" required>
                    </div>
                </div>
                
                <div class="form-group checkbox-group">
                    <label>
                        <input type="checkbox" name="bedrijfswagen" value="1">
                        Bedrijfswagen
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary">Auto Toevoegen</button>
            </form>
        </div>

        
        <div class="admin-section">
            <h2>Alle Auto's</h2>
            <div class="cars-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Auto</th>
                            <th>Type</th>
                            <th>Motor</th>
                            <th>Versnellingsbak</th>
                            <th>Passagiers</th>
                            <th>Prijs</th>
                            <th>Bedrijfswagen</th>
                            <th>Beschikbaar</th>
                            <th>Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cars as $car): ?>
                            <tr>
                                <td><?= $car['Id'] ?></td>
                                <td><?= htmlspecialchars($car['Auto']) ?></td>
                                <td><?= htmlspecialchars($car['Type']) ?></td>
                                <td><?= $car['Liter'] ?>L</td>
                                <td><?= htmlspecialchars($car['Versnellingsbak']) ?></td>
                                <td><?= $car['Passagiers'] ?></td>
                                <td>€<?= number_format($car['Prijs'], 2) ?></td>
                                <td>
                                    <span class="badge <?= $car['Bedrijfswagen'] ? 'badge-primary' : 'badge-secondary' ?>">
                                        <?= $car['Bedrijfswagen'] ? 'Ja' : 'Nee' ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="badge <?= $car['Beschikbaar'] ? 'badge-success' : 'badge-danger' ?>">
                                        <?= $car['Beschikbaar'] ? 'Ja' : 'Nee' ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-small btn-secondary" onclick="editCar(<?= $car['Id'] ?>)">Bewerken</button>
                                        <form method="POST" style="display: inline;" onsubmit="return confirm('Weet je zeker dat je deze auto wilt verwijderen?')">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="car_id" value="<?= $car['Id'] ?>">
                                            <button type="submit" class="btn btn-small btn-danger">Verwijderen</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<style>
.admin-page {
    background: #f8fafc;
    min-height: 100vh;
    padding: 40px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.admin-header {
    text-align: center;
    margin-bottom: 40px;
}

.admin-header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin: 0 0 8px 0;
}

.admin-header p {
    color: #6b7280;
    font-size: 1.1rem;
    margin: 0;
}

.alert {
    padding: 16px;
    border-radius: 8px;
    margin-bottom: 24px;
}

.alert-success {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.alert-error {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
}

.admin-section {
    background: white;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.admin-section h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1f2937;
    margin: 0 0 24px 0;
}

.admin-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 0.9rem;
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.form-group input,
.form-group select {
    padding: 12px 16px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.2s;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.checkbox-group {
    flex-direction: row;
    align-items: center;
    gap: 8px;
}

.checkbox-group input[type="checkbox"] {
    width: auto;
    margin: 0;
}

.btn {
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    font-size: 1rem;
}

.btn-primary {
    background: #667eea;
    color: white;
}

.btn-primary:hover {
    background: #5a67d8;
    transform: translateY(-1px);
}

.btn-secondary {
    background: #6b7280;
    color: white;
}

.btn-secondary:hover {
    background: #4b5563;
}

.btn-danger {
    background: #ef4444;
    color: white;
}

.btn-danger:hover {
    background: #dc2626;
}

.btn-small {
    padding: 6px 12px;
    font-size: 0.85rem;
}

.cars-table {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #e5e7eb;
}

th {
    background: #f9fafb;
    font-weight: 600;
    color: #374151;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

td {
    color: #6b7280;
}

.badge {
    padding: 4px 8px;
    border-radius: 6px;
    font-size: 0.8rem;
    font-weight: 600;
}

.badge-primary {
    background: #dbeafe;
    color: #1e40af;
}

.badge-secondary {
    background: #f3f4f6;
    color: #374151;
}

.badge-success {
    background: #d1fae5;
    color: #065f46;
}

.badge-danger {
    background: #fee2e2;
    color: #991b1b;
}

.action-buttons {
    display: flex;
    gap: 8px;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .cars-table {
        font-size: 0.9rem;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .btn-small {
        width: 100%;
    }
}
</style>

<script>
function editCar(carId) {
   
    alert('Edit functionaliteit wordt binnenkort toegevoegd voor auto ID: ' + carId);
}
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?> 