<?php
// include_once "./User.php";
// include_once "./Cours.php";

class EnseignantModel extends UserModel{
    // private $coursesOnCour = [];
    // private $nametable = "Enseignant";



    public function createCours(string $titre, string $description, string $video, string $document, array $tags, EnseignantModel $enseignant, CategorieModel $categorie): Cours
    {
        $Lastcours = Cours::createCours($titre, $description, $video, $document, $tags, $enseignant, $categorie, $enseignant, $categorie);
        $this->courses [] = $Lastcours;
        return $Lastcours;
    }

    

    public function create()
    {
        $query = "INSERT INTO Enseignant(FirstName, LastName, email, id_role) VALUES (:FirstName, :LastName, :email, :id_role)";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':FirstName', $this->Firstname);
        $stmt->bindParam(':LastName', $this->Lastname);
        $stmt->bindParam(':email', $this->email);
        echo "___----------------id---".$this->role->getid();
        $id = $this->role->getid();
        $stmt->bindParam(':id_role', $id);
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

        // updet all 
    public static function update($id, $Firstname, $Lastname, $email)
    {
        $query = "UPDATE Enseignant SET Firstname = :Firstname, Lastname = :Lastname, email = :email WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':FirstName', $Firstname);
        $stmt->bindParam(':LastName', $Lastname);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
    public static function updateFirstName($id, $Firstname)
    {
        $query = "UPDATE Enseignant SET Firstname = :Firstname WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':FirstName', $Firstname);
        $stmt->execute();
    }
    public static function updateLastname($id, $Lastname)
    {
        $query = "UPDATE Enseignant SET Lastname = :Lastname WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':LastName', $Lastname);
        $stmt->execute();
    }
    public static function updateEmail($id, $email)
    {
        $query = "UPDATE Enseignant SET email = :email WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':email', $email);
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