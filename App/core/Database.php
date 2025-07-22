<?php
namespace AppDaf\Core\Abstract;
// connexion a la db
//  dsn = type,host,port,nombd
use PDO;
use PDOException;

class Database{
    private static ?PDO $pdo = null;

    // gere connexion a la base de donner
    public static function getConnection(): PDO
    {
        if (self::$pdo === null) {
            $driver = defined('DB_DRIVER') ? DB_DRIVER : 'pgsql';
            $host = defined('DB_HOST') ? DB_HOST : 'localhost';
            $dbname = defined('DB_NAME') ? DB_NAME : 'remediationmaxit';
            $dsn = defined('DSN') ? DSN : "$driver:host=$host;dbname=$dbname";
            $port = defined('DB_PORT') ? DB_PORT : '5432';
            $user = defined('DB_USER') ? DB_USER : 'postgres';
            $pass = defined('DB_PASSWORD') ? DB_PASSWORD : 'foulah@18';
            
            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
             
            } catch (PDOException $e) {
               
                die("Erreur de connexion : " . $e->getMessage());
            }
        }

        return self::$pdo;
    
    }
}

