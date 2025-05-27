<?php
// render_facts.php
if (!isset($animalName)) {
  echo "<p style='color:red;'>Error: animalName not set</p>";
  return;
}

$conn = new mysqli("localhost","root","","animalswebsite");
if ($conn->connect_error) {
  echo "<p style='color:red;'>DB Error</p>";
  return;
}

$stmt = $conn->prepare("
  SELECT f.fact_text, f.created_at, l.username
  from fact f, login l
  where f.animal = ? and f.userid = l.userid;
");
$stmt->bind_param("s", $animalName);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 0) {
  echo "<p>No facts yet. <a href='facts.php'>Be the first!</a></p>";
} else {
  echo "<ul class='fact-list'>";
  while ($row = $res->fetch_assoc()) {
    $text = htmlspecialchars($row['fact_text']);
    $user = htmlspecialchars($row['username']);
    $time = date("F j, Y, g:ia", strtotime($row['created_at']));
    echo "<li>
            <blockquote>“{$text}”</blockquote>
            <small>— {$user} on {$time}</small>
          </li>";
  }
  echo "</ul>";
}

$stmt->close();
$conn->close();
?>
