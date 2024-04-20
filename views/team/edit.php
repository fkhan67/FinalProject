<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <h1>Edit Team</h1>
    <?php
    // Retrieve team data from controller based on ID and pre-fill form fields
    // Example:
    // $team = $teamController->getTeamById($_GET['id']);
    ?>
    <form action="edit.php" method="POST">
        <label for="name">Team Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $team['name']; ?>" required>
        <input type="hidden" name="id" value="<?php echo $team['id']; ?>">
        <button type="submit">Update Team</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $id = $_POST['id'];
    $name = $_POST['name'];
    // Call appropriate method in TeamController to update team
}
?>
