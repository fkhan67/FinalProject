class Team {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    // Create a new team
    public function create($name) {
        $query = "INSERT INTO teams (name) VALUES (:name)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }
    // Read all teams
    public function getAllTeams() {
        $query = "SELECT * FROM teams";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Read a team by ID
    public function getTeamById($id) {
        $query = "SELECT * FROM teams WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Update a team
    public function update($id, $name) {
        $query = "UPDATE teams SET name = :name WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    // Delete a team
    public function delete($id) {
        $query = "DELETE FROM teams WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
