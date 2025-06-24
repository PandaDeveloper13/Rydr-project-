<?php
// Database connectie voor auto's
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/cars-db.php';

// Haal alle auto's op uit de database
$cars = getCars();

// Fallback naar statische data als database niet beschikbaar is
if (empty($cars)) {
    // Backup statische data voor het geval de database niet werkt
    $cars = [
        [
            'Id' => 1,
            'Auto' => 'Toyota Yaris',
            'Type' => 'Hatchback',
            'Liter' => 1.5,
            'Versnellingsbak' => 'Handgeschakeld',
            'Passagiers' => 5,
            'Prijs' => 45.00,
            'Bedrijfswagen' => false,
            'Beschikbaar' => true
        ],
        [
            'Id' => 2,
            'Auto' => 'Volkswagen Polo',
            'Type' => 'Hatchback',
            'Liter' => 1.0,
            'Versnellingsbak' => 'Handgeschakeld',
            'Passagiers' => 5,
            'Prijs' => 50.00,
            'Bedrijfswagen' => false,
            'Beschikbaar' => true
        ],
        [
            'Id' => 3,
            'Auto' => 'Ford Transit',
            'Type' => 'Bedrijfswagen',
            'Liter' => 2.0,
            'Versnellingsbak' => 'Handgeschakeld',
            'Passagiers' => 3,
            'Prijs' => 75.00,
            'Bedrijfswagen' => true,
            'Beschikbaar' => true
        ]
    ];
}
?>
