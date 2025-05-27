<?php
session_start();  // 1) Start the session

// Database connection
$host = "localhost";
$user = "root";
$password = "";
$db = "animalswebsite";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$username = $_POST['username'];
$password = $_POST['password']; // plain‑text

// Look up user by username + password
$stmt = $conn->prepare("SELECT userid FROM login WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // 2) On success, fetch the userid and store it in session
    $row = $result->fetch_assoc();
    $_SESSION['userid'] = $row['userid'];

    // 3) Redirect to add_facts.php
    header("Location: main.html");
    exit();
} else {
    // Incorrect credentials
    echo "<script>
            alert('Incorrect username or password');
            window.location.href='login.html';
          </script>";
}

$stmt->close();
$conn->close();
?>
