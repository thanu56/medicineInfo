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

    // Search for medicines
    $stmt = $conn->prepare("
        SELECT 
            m.id,
            m.medicine_name,
            m.brand_name,
            m.strength,
            m.price
        FROM Medicines m
        WHERE m.medicine_name LIKE :searchTerm
        OR m.brand_name LIKE :searchTerm
        ORDER BY m.medicine_name
        LIMIT 50
    ");
    
    $searchParam = "%$medicineName%";
    $stmt->bindParam(':searchTerm', $searchParam);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'status' => 'success',
        'type' => 'medicines',
        'data' => $results,
        'meta' => [
            'count' => count($results),
            'search_term' => $medicineName
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