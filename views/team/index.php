<?php
// Include database configuration
require_once('../config/database.php');

// Include controllers
require_once('../controllers/TeamController.php');

// Create an instance of the team controller
$teamController = new TeamController($db);

// Handle requests based on routing (not shown here)

// Assuming there's a routing mechanism, let's add links to create and edit teams
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

    <!-- Links to create and edit teams -->
    <div>
        <a href="team/create.php">Create New Team</a>
    </div>
    <div>
        <a href="team/edit.php?id=1">Edit Team 1</a>
        <!-- Replace 1 with the actual ID of the team you want to edit -->
    </div>

    <!-- Include JavaScript files as needed -->
    <script src="js/script.js"></script>
</body>
</html>
