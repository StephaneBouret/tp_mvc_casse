<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

abstract class DbConnect
{
    protected static ?PDO $connection = null;
    protected static function getConnection(): PDO
    {
        if (self::$connection === null) {
            try {
                $dsn = sprintf(
                    'mysql:host=%s;dbname=%s;charset=utf8mb4',
                    'localhost',
                    'coursportfolio'
                );
                self::$connection = new PDO(
                    $dsn,
                    'root',
                    '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
