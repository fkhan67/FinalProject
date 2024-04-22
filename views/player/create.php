<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Player</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Create New Player</h1>
    <form action="create.php" method="POST">
        <label for="name">Player Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Create Player</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $name = $_POST['name'];
    $age = $_POST['age'];
    // Call appropriate method in PlayerController to create player
    // For example:
    // $playerController->createPlayer($name, $age);
}
?>
