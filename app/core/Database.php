<?php

class Database {
    private function connect()
    {
        $host = DBHOST;
        $dbname = DBNAME;
        $user = DBUSER;
        $password = DBPASSWORD;
        $driver = DBDRIVER;

        try {
            $dsn = "$driver:host=$host;dbname=$dbname;charset=utf8";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}