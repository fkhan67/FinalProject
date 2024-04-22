<?php
// Include database configuration
require_once('../config/database.php');
// Include controllers
require_once('../controllers/TeamController.php');
require_once('../controllers/PlayerController.php');
// Create instances of controllers
$teamController = new TeamController($db);
$playerController = new PlayerController($db);
// Handle requests based on routing (not shown here)
// Assuming there's a routing mechanism, let's add links to create and edit players
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome to the Web Application</h1>
    <!-- Links to create and edit players -->
    <div>
        <a href="player/create.php">Create New Player</a>
    </div>
    <div>
        <a href="player/edit.php?id=1">Edit Player 1</a>
        <!-- Assuming you have player IDs for editing -->
    </div>
    <!-- Include JavaScript files as needed -->
    <script src="js/script.js"></script>
</body>
</html>
