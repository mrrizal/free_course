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

    public static function add_artikel($data) {
        // print_r($data);
        $sql = "INSERT INTO article (title, content) VALUES (:title, :content)";
        $q = Database::$pdo->prepare($sql);
        $q->bindParam(':title', $title);
        $q->bindParam(':content', $content);

        $title = $data['title'];
        $content = $data['content'];

        return $q->execute();

    }

    public static function update_artikel($data) {
        // print_r($data);
        $sql = "UPDATE article SET content=:content WHERE id=:id";
        $q = Database::$pdo->prepare($sql);
        $q->bindParam(':content', $content);
        $q->bindParam(':id', $id);

        $id = $data['id'];
        $content = $data['content'];

        return $q->execute();

    }

    public static function delete_artikel($id) {
        $sql = "DELETE FROM `article` WHERE `id`= ?";
        $q = Database::$pdo->prepare($sql);
        return $q->execute(array($id));
    }
}