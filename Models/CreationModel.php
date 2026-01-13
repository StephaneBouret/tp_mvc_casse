<?php

declare(strict_types=1);

namespace App\Models;

final class CreationModel extends Model
{
    public function findAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM creation');
        $rows = $stmt->fetchAll();
        echo "<!-- Model debug -->";
        return $rows;
    }
}
