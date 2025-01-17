<?php
// include_once "./app/models/General.php";

class CategorieModel extends General{

    public function create()
    {
        $query = "INSERT INTO Categorie (name) VALUES(:name)";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $this->name);
        
        echo "4---";
        $stmt->execute();
        echo "5---";
        
        $this->id = Database::getInstance()
            ->getConnection()
            ->lastInsertId();
    }

    public static function DeleteById(int $id)
    {
        $query = "DELETE FROM Categorie WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
    }

    public static function update($id, $name )
    {
        $query = "UPDATE Categorie SET name = :name WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
    }

    public static function read(int $id)
    {
        $query = "SELECT name, id FROM Categorie WHERE id = :id";

        $stmt = DataBase::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);

        echo "4---";
        $stmt->execute();
        echo "5---";
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categorie');
        return $stmt->fetch();
    }

}