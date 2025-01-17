<?php
include_once "./app/models/User.php";

    class AdministrateurModel extends UserModel 
    {
        public function create()
        {
            $query = "INSERT INTO Administrateur(FirstName, LastName, id_role) VALUES (:FirstName, :LastName, :id_role)";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':FirstName', $this->Firstname);
            $stmt->bindParam(':LastName', $this->Lastname);
            $stmt->bindParam(':id_role', $this->getrole()->getId());
            $stmt->execute();
            $this->id = Database::getInstance()->getConnection()->lastInsertId();

        }
    
        public static function delete($id)
        {
            $query = "DELETE FROM Administrateur WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

        }
    
        public static function update($id, $Firstname, $Lastname, $id_role)
        {
            $query = "UPDATE Administrateur SET Firstname = :Firstname, Lastname = :Lastname, id_role = :id_role WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':FirstName', $Firstname);
            $stmt->bindParam(':LastName', $Lastname);
            $stmt->bindParam(':id_role', $id_role);
            $stmt->execute();
    
        }
    
        public static function read(int $id): EtudiantModel
        {
            $query = "SELECT * FROM Administrateur WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Etudiant');

            if($stmt->fetch()->mode != "newPerson")
            return $stmt->fetch();
        }
    }