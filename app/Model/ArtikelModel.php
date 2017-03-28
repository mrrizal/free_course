<?php

namespace Mvc\Model;

use Mvc\Core\Database;

class ArtikelModel
{
    public static function all()
    {
        $sql = "SELECT * FROM `article` ORDER BY `id` DESC";
        $q = Database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;
    }

    public static function one($title)
    {
        // $title = filter_var($title, FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM `article` WHERE `title` = ?";
        $q = Database::$pdo->prepare($sql);
        $q->execute(array($title));
        $row = $q->fetch();
        return $row;
    }

    public static function get_latest() {
        $sql = "SELECT * FROM `article` ORDER BY `id` DESC limit 2";
        $q = Database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;

    }
}