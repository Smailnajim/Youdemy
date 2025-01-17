<?php
// include_once "./User.php";
// include_once "./Cours.php";

class EnseignantModel extends UserModel{
    // private $coursesOnCour = [];
    // private $nametable = "Enseignant";



    public function createCours(string $titre, string $description, string $video, string $document, array $tag): Cours
    {
        $Lastcours = Cours::createCours($titre, $description, $video, $document, $tag);
        $this->courses [] = $Lastcours;
        return $Lastcours;
    }

    

    public function create()
    {
        $query = "INSERT INTO Enseignant(FirstName, LastName) VALUES (:FirstName, :LastName)";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':FirstName', $this->Firstname);
        $stmt->bindParam(':LastName', $this->Lastname);
        $stmt->execute();
        $this->id = Database::getInstance()->getConnection()->lastInsertId();
    }

    public static function delete($id)
    {
        $query = "DELETE FROM Enseignant WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public static function update($id, $Firstname, $Lastname)
    {
        $query = "UPDATE Enseignant SET Firstname = :Firstname, Lastname = :Lastname WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':FirstName', $Firstname);
        $stmt->bindParam(':LastName', $Lastname);
        $stmt->execute();

    }

    public static function read(int $id): EnseignantModel
    {
        $query = "SELECT * FROM Enseignant WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Enseignant');
        
        if($stmt->fetch()->mode != "newPerson")
        return $stmt->fetch();
    }

}