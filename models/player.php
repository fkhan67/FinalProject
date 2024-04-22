class Player {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new player
    public function create($name, $age, $team_id) {
        $query = "INSERT INTO players (name, age, team_id) VALUES (:name, :age, :team_id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':team_id', $team_id);
        return $stmt->execute();
    }
    // Read all players
    public function getAllPlayers() {
        $query = "SELECT * FROM players";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Read a player by ID
    public function getPlayerById($id) {
        $query = "SELECT * FROM players WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Update a player
    public function update($id, $name, $age, $team_id) {
        $query = "UPDATE players SET name = :name, age = :age, team_id = :team_id WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':team_id', $team_id);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    // Delete a player
    public function delete($id) {
        $query = "DELETE FROM players WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
