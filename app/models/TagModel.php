<?php
// include_once "./app/models/General.php";

class TagModel extends General{

    public function create()
    {
        $query = "INSERT INTO Tag (name) VALUES (:name)";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->execute();

        $this->id = Database::getInstance()->getConnection()->lastInsertId();
    }

    public static function delete(int $id)
    {
        $query = "DELETE FROM Tag WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }

    public static function update($id, $name)
    {
        $query = "UPDATE Tag SET name = :name WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    public static function read($id)
    {
        $query = "SELECT * FROM Tag WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Tag');
        return $stmt->fetch();
    }
}