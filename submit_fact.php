<?php
session_start();
if (!isset($_SESSION['userid'])) {
    echo "You need to log in."; 
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request."; 
    exit;
}

$userid = $_SESSION['userid'];
$animal = $_POST['animal'] ?? '';
$fact   = $_POST['fact']   ?? '';

if (!$animal || !$fact) {
    echo "All fields are required."; 
    exit;
}

$conn = new mysqli("localhost", "root", "", "animalswebsite");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO fact (userid, animal, fact_text) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $userid, $animal, $fact);

if ($stmt->execute()) {
    // On success, redirect back to main.html
    header("Location: main.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
