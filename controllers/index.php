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
?>
