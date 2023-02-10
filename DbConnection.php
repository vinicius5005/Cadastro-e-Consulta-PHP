<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

class User {
    private $conn;

   
    public function __construct($db) {
        $this->conn = $db;
    }

    
    public function read() {
        try {
            $query = 'SELECT * FROM client';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function create($nome, $cpf, $contato) {
        try {
            $query = 'INSERT INTO client (nome, cpf, contato) VALUES (:nome, :cpf, :contato)';
            $stmt = $this->conn->prepare($query);
    
           
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':contato', $contato);
    
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}


?>