<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/db.php';

/**
 * Creates a new reservation in the database.
 *
 * @param int $userId The ID of the user making the reservation.
 * @param int $carId The ID of the car being reserved.
 * @param string $startDate The start date of the reservation (YYYY-MM-DD).
 * @param string $endDate The end date of the reservation (YYYY-MM-DD).
 * @param float $totalPrice The total price of the reservation.
 * @return bool True on success, false on failure.
 */
function createReservation($userId, $carId, $startDate, $endDate, $totalPrice) {
    global $conn;

    $sql = "INSERT INTO reservations (user_id, car_id, start_date, end_date, total_price, status) VALUES (?, ?, ?, ?, ?, 'confirmed')";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        error_log('Prepare failed: ' . $conn->error);
        return false;
    }

    $stmt->bind_param("iissd", $userId, $carId, $startDate, $endDate, $totalPrice);

    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        error_log('Execute failed: ' . $stmt->error);
        $stmt->close();
        return false;
    }
}
?>
