<?php
require_once('../models/Team.php');

class TeamController {
    private $teamModel;

    public function __construct($db) {
        $this->teamModel = new Team($db);
    }

    // Methods to handle team-related requests (e.g., listing, creating, editing teams)
}
?>
