<?php

declare(strict_types=1);

namespace App\Controllers;

use PDO;

final class CreationController
{
    public function index(): void
    {
        $pdo = new PDO('mysql:host=localhost;dbname=coursportfolio;charset=utf8mb4', 'root', '');
        $rows = $pdo->query('SELECT * FROM creation')->fetchAll(PDO::FETCH_ASSOC);
        echo "<h1>Liste</h1>";
        foreach ($rows as $r) {
            echo "<a href='?controller=creation&action=show&id={$r['id_creation']}'>" . $r['title'] . "</a><br>";
        }
    }
    public function show(array $params): void
    {
        $id = (int)($params['id'] ?? 0);
        $pdo = new PDO('mysql:host=localhost;dbname=coursportfolio;charset=utf8mb4', 'root', '');
        $row = $pdo->query("SELECT * FROM creation WHERE id_creation=$id")->fetch(PDO::FETCH_ASSOC); // ❌ injection SQL
        echo "<h1>{$row['title']}</h1>";
        echo "<p>{$row['description']}</p>";
    }
}
