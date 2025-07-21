<?php
class Database
{
    private $server="localhost";
    private $user="root";
    private $password="";
    private $database_name="MyPOS";
    private $connect;

    public function connect()
    {
        try
        {
            $this->connect = new PDO(
                "mysql:host={$this->server};dbname={$this->database_name};charset=utf8mb4", 
                $this->user,
                $this->password
            );
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            return $this->connect;
        }
        catch(PDOException $e)
        {
             echo "Database connection error: " . $e->getMessage();
            return null;
        }
    }
}


?>