<?php
class Connection{
const SERVER_NAME = "localhost";
const USERNAME= "root";
const PASSWORD = "";
private $connection;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        try
        {
            $this->connection = new PDO("mysql:host=".self::SERVER_NAME.";dbname=phonesDB", self::USERNAME, self::PASSWORD);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch
        (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * @return PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }


}

