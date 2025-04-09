<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'medicalsystem';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $medicineName = trim($_GET['medicine'] ?? '');
    
    if (empty($medicineName)) {
        throw new Exception("Medicine name is required");
    }

    // Search for stores carrying this medicine
    $stmt = $conn->prepare("
        SELECT DISTINCT
            s.id,
            s.store_name,
            s.address,
            s.contact,
            s.pincode
        FROM Medical_Stores s
        JOIN medicine_availability ma ON s.id = ma.store_id
        JOIN Medicines m ON ma.medicine_id = m.id
        WHERE m.medicine_name = :medicineName
        ORDER BY s.store_name
        LIMIT 50
    ");
    
    $stmt->bindParam(':medicineName', $medicineName);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'status' => 'success',
        'type' => 'stores',
        'data' => $results,
        'meta' => [
            'count' => count($results),
            'medicine' => $medicineName
        ]
    ]);

} catch(PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Database error. Please try again.',
        'code' => $e->getCode()
    ]);
} catch(Exception $e) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}