<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/db.php';

/**
 * Toggles a car in the user's wishlist. Adds it if it's not there, removes it if it is.
 *
 * @param int $userId The ID of the user.
 * @param int $carId The ID of the car.
 * @return bool True on success, false on failure.
 */
function toggleWishlist($userId, $carId)
{
    global $conn;

    // Check if wishlist table exists
    $tableExists = $conn->query("SHOW TABLES LIKE 'wishlist'");
    if ($tableExists->num_rows == 0) {
        // Create the table if it doesn't exist
        $createTable = "
        CREATE TABLE IF NOT EXISTS `wishlist` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `user_id` int(11) NOT NULL,
          `car_id` int(11) NOT NULL,
          `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
          PRIMARY KEY (`id`),
          UNIQUE KEY `user_car_unique` (`user_id`, `car_id`),
          KEY `user_id` (`user_id`),
          KEY `car_id` (`car_id`),
          CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE,
          CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
        ";
        $conn->query($createTable);
    }

    // First, check if the item is already in the wishlist
    $checkSql = "SELECT id FROM wishlist WHERE user_id = ? AND car_id = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("ii", $userId, $carId);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        // It exists, so remove it
        $deleteSql = "DELETE FROM wishlist WHERE user_id = ? AND car_id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("ii", $userId, $carId);
        return $deleteStmt->execute();
    } else {
        // It does not exist, so add it
        $insertSql = "INSERT INTO wishlist (user_id, car_id) VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertSql);
        $insertStmt->bind_param("ii", $userId, $carId);
        return $insertStmt->execute();
    }
}

/**
 * Gets all wishlist items for a specific user.
 *
 * @param int $userId The ID of the user.
 * @return array An array of car IDs from the user's wishlist.
 */
function getWishlistByUser($userId)
{
    global $conn;
    $wishlist = [];
    
    // Check if wishlist table exists
    $tableExists = $conn->query("SHOW TABLES LIKE 'wishlist'");
    if ($tableExists->num_rows == 0) {
        // Return empty array if table doesn't exist
        return $wishlist;
    }
    
    $sql = "SELECT car_id FROM wishlist WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $wishlist[] = $row['car_id'];
    }
    return $wishlist;
}
?>
