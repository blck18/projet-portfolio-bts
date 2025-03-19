<?php
require_once __DIR__ . '/../config/database.php';

class Project {
    private $conn;
    private $table_name = "projects";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProjects() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function displayProjects() {
        $projects = $this->getAllProjects();
        $output = '';
        
        while ($row = $projects->fetch(PDO::FETCH_ASSOC)) {
            $output .= '<div class="col-md-4 mb-4">
                <div class="card project-card">
                    <img src="images/' . htmlspecialchars($row['image_url']) . '" class="card-img-top" alt="' . htmlspecialchars($row['title']) . '">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>
                        <p class="card-text">' . htmlspecialchars($row['description']) . '</p>
                        <p class="card-text"><small class="text-muted">Technologies : ' . htmlspecialchars($row['technologies']) . '</small></p>';
            
            if (!empty($row['github_url'])) {
                $output .= '<a href="' . htmlspecialchars($row['github_url']) . '" class="btn btn-primary" target="_blank">Voir sur GitHub</a>';
            }
            
            $output .= '</div></div></div>';
        }
        
        return $output;
    }
}
?>
