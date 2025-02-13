<?php
class Database {
    private $dbh;
    private $stmt;

    public function __construct() {
        // Establishing a PDO connection
        $this->dbh = new PDO('mysql:host=localhost;dbname=niharikasofttech_db', 'root', '');
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exceptions
    }

    
}
?>
