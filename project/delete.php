<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?action=list");
} else {
    echo "Error: " . $conn->error;
}
?>