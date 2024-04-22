<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Edit Player</h1>
    <?php
    // Retrieve player data from controller based on ID and pre-fill form fields
    // Example:
    // $player = $playerController->getPlayerById($_GET['id']);
    ?>
    <form action="edit.php" method="POST">
        <label for="name">Player Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $player['name']; ?>" required>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo $player['age']; ?>" required>
        <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
        <button type="submit">Update Player</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    // Call appropriate method in PlayerController to update player
    // For example:
    // $playerController->updatePlayer($id, $name, $age);
}
?>
