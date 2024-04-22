<?php
require_once('../models/Player.php');
class PlayerController {
    private $playerModel;
    public function __construct($db) {
        $this->playerModel = new Player($db);
    }
    public function listPlayers() {
        // Fetch players from the database using the Player model
    }
    public function createPlayer($data) {
        // Create a new player using the Player model
    }
    public function updatePlayer($id, $data) {
        // Update an existing player using the Player model
    }
    public function deletePlayer($id) {
        // Delete a player using the Player model
    }
}
?>
