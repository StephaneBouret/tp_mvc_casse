<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\DbConnect;
use PDO;

abstract class Model extends DbConnect
{
    protected PDO $pdo;
    public function __construct()
    {
        $this->pdo = self::getConnection();
    }
}
