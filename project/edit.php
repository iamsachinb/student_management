<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?action=list");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Student</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $student['name'] ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $student['email'] ?>" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="<?= $student['phone'] ?>">

        <label for="course">Course</label>
        <input type="text" id="course" name="course" value="<?= $student['course'] ?>" required>

        <button type="submit">Update Student</button>
    </form>
</body>

</html>