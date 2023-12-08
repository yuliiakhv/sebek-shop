<?php
namespace core;
use PDO;
use PDOException;

class DataBase{
    public static $connection;
    public static $data = [];

    
    private function __clone() {}
    private function __construct() {}


    public static function db_connection(){
        // try {
        //     self::$connection = new PDO('mysql:dbname=movie-site;host=localhost', 'root', '');
        // } catch (PDOException $e) {
        //     Errors::handler("Database connection failed");
        // }        
    }

    public static function select(string $sql): array{
        self::db_connection();
        $result = self::$connection->query($sql);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public static function delete(string $sql): int {
        self::db_connection();
        $del = self::$connection->prepare($sql);
        $del->execute();
        return $del->rowCount();
    }

    public static function insert(string $sql, array $data): int {
        self::db_connection();
        $ins = self::$connection->prepare($sql);
            foreach($data as $key => $value)
        {
            $ins->bindValue(":$key",$value);
        }
        $ins->execute();
        return $ins->rowCount(); 
    }

    public static function update(string $sql, array $data): int {
        self::db_connection();
        $upd = self::$connection->prepare($sql);
        foreach($data as $key => $value)
        {
            $upd->bindValue(":$key",$value);
        }
        $upd->execute();
        return $upd->rowCount();
    }
}