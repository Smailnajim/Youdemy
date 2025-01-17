<?php
// include_once "./app/core/DataBase.php";
// include "../app/core/DataBase.php";
class RoleModel extends General{

    public function create()
    {
        $query = "INSERT INTO role (name) VALUES(:name)";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $this->name);
        
        echo "4---";
        $stmt->execute();
        echo "5---";
        
        $this->id = Database::getInstance()
            ->getConnection()
            ->lastInsertId();
    }

    public static function delete(int $id)
    {
        $query = "DELETE FROM role WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
    }

    public static function update($id, $name )
    {
        $query = "UPDATE role SET name = :name WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
    }

    public static function read(int $id)
    {
        $query = "SELECT name, id FROM role WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Role');
        return $stmt->fetch();
    }
}