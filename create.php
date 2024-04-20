<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Team</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Create New Team</h1>
    <form action="create.php" method="POST">
        <label for="name">Team Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create Team</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $name = $_POST['name'];
    // Call appropriate method in TeamController to create team
}
?>
