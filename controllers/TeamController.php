<?php
require_once('../models/Team.php');
class TeamController {
    private $teamModel;
    public function __construct($db) {
        $this->teamModel = new Team($db);
    }
    public function listTeams() {
        // Fetch teams from the database using the Team model
    }
    public function createTeam($data) {
        // Create a new team using the Team model
    }
    public function updateTeam($id, $data) {
        // Update an existing team using the Team model
    }
    public function deleteTeam($id) {
        // Delete a team using the Team model
    }
}
?>
