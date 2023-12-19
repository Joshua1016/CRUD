<?php

/**
 * 
 * This Class Use to manage Database Connection
 * 
 */

class Database
{
    // @var string $server The database server
    private $server = 'mysql:host=localhost; dbname=ffhc;';
    // @var string $username The database username
    private $username = 'admin';
    // @var string $password The database password
    private $password = 'admin1';
    // @var array $options PDO options
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    // @var object $conn The database connection
    protected $conn;
    /**
     * Opens a connection to the database.
     */
    public function openConnection()
    {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            // Check if the connection is open
            if (!$this->conn) {
                echo "Connection Failed";
                return;
            }
            // Return the connection if it is open
            return $this->conn;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
    // <a href="PageUserUpdate.php?id='.$user['id'].'" class="btn btn-danger btn-sm"><span glyphicon glyphicon-trash"></span></a>