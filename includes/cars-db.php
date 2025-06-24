<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/db.php';

/**
 * Haal alle auto's op uit de database
 * @param bool $bedrijfswagen_only Alleen bedrijfswagens ophalen
 * @param bool $beschikbaar Alleen beschikbare auto's ophalen
 * @return array Array met auto data
 */
function getCars($bedrijfswagen_only = false, $beschikbaar = true) {
    global $conn;
    
    $sql = "SELECT * FROM cars WHERE 1=1";
    $params = [];
    
    if ($bedrijfswagen_only) {
        $sql .= " AND bedrijfswagen = 1";
    }
    
    if ($beschikbaar) {
        $sql .= " AND beschikbaar = 1";
    }
    
    $sql .= " ORDER BY prijs ASC";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    
    $cars = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        // Converteer database velden naar de oude array structuur voor compatibiliteit
        $cars[] = [
            'Id' => $row['id'],
            'Auto' => $row['auto'],
            'Type' => $row['type'],
            'Liter' => $row['liter'],
            'Versnellingsbak' => $row['versnellingsbak'],
            'Passagiers' => $row['passagiers'],
            'Prijs' => $row['prijs'],
            'Bedrijfswagen' => (bool)$row['bedrijfswagen'],
            'Beschikbaar' => (bool)$row['beschikbaar'],
            'rating' => $row['rating'] ?? null,
            'reviews' => $row['reviews'] ?? null,
            'description' => $row['description'] ?? null
        ];
    }
    
    return $cars;
}

/**
 * Haal een specifieke auto op basis van ID
 * @param int $id Auto ID
 * @return array|null Auto data of null als niet gevonden
 */
function getCarById($id) {
    global $conn;
    
    $sql = "SELECT * FROM cars WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return [
            'Id' => $row['id'],
            'Auto' => $row['auto'],
            'Type' => $row['type'],
            'Liter' => $row['liter'],
            'Versnellingsbak' => $row['versnellingsbak'],
            'Passagiers' => $row['passagiers'],
            'Prijs' => $row['prijs'],
            'Bedrijfswagen' => (bool)$row['bedrijfswagen'],
            'Beschikbaar' => (bool)$row['beschikbaar'],
            'rating' => $row['rating'] ?? null,
            'reviews' => $row['reviews'] ?? null,
            'description' => $row['description'] ?? null
        ];
    }
    
    return null;
}

/**
 * Zoek auto's op basis van criteria
 * @param array $filters Zoekfilters
 * @return array Array met auto data
 */
function searchCars($filters = []) {
    global $conn;
    
    $sql = "SELECT * FROM cars WHERE 1=1";
    $params = [];
    $types = "";
    
    // Type filter
    if (!empty($filters['type'])) {
        $sql .= " AND type = ?";
        $params[] = $filters['type'];
        $types .= "s";
    }
    
    // Prijs range
    if (!empty($filters['min_price'])) {
        $sql .= " AND prijs >= ?";
        $params[] = $filters['min_price'];
        $types .= "d";
    }
    
    if (!empty($filters['max_price'])) {
        $sql .= " AND prijs <= ?";
        $params[] = $filters['max_price'];
        $types .= "d";
    }
    
    // Bedrijfswagen filter
    if (isset($filters['bedrijfswagen'])) {
        $sql .= " AND bedrijfswagen = ?";
        $params[] = $filters['bedrijfswagen'] ? 1 : 0;
        $types .= "i";
    }
    
    // Beschikbaarheid
    if (isset($filters['beschikbaar'])) {
        $sql .= " AND beschikbaar = ?";
        $params[] = $filters['beschikbaar'] ? 1 : 0;
        $types .= "i";
    }
    
    $sql .= " ORDER BY prijs ASC";
    
    $stmt = $conn->prepare($sql);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    
    $cars = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $cars[] = [
            'Id' => $row['id'],
            'Auto' => $row['auto'],
            'Type' => $row['type'],
            'Liter' => $row['liter'],
            'Versnellingsbak' => $row['versnellingsbak'],
            'Passagiers' => $row['passagiers'],
            'Prijs' => $row['prijs'],
            'Bedrijfswagen' => (bool)$row['bedrijfswagen'],
            'Beschikbaar' => (bool)$row['beschikbaar'],
            'rating' => $row['rating'] ?? null,
            'reviews' => $row['reviews'] ?? null,
            'description' => $row['description'] ?? null
        ];
    }
    
    return $cars;
}

/**
 * Haal alle unieke auto types op
 * @return array Array met auto types
 */
function getCarTypes() {
    global $conn;
    
    $sql = "SELECT DISTINCT type FROM cars ORDER BY type";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $types = [];
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $types[] = $row['type'];
    }
    
    return $types;
}

/**
 * Update auto beschikbaarheid
 * @param int $id Auto ID
 * @param bool $beschikbaar Beschikbaarheid status
 * @return bool Success status
 */
function updateCarAvailability($id, $beschikbaar) {
    global $conn;
    
    $sql = "UPDATE cars SET beschikbaar = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $beschikbaar ? 1 : 0, $id);
    
    return $stmt->execute();
}
?> 