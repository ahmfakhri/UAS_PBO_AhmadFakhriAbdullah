<?php

class Database
{
    private static $instance = null;
    private $pdo;

    private $host = "localhost";
    private $db = "db_uas_pbo_trpl1a_ahmadfakhriabdullah";
    private $user = "root";
    private $pass = "";
    private $charset = "utf8mb4";

    private function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        $this->pdo = new PDO($dsn, $this->user, $this->pass);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}