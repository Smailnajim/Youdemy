<?php
// include_once __DIR__.'/Cours.php';

class UserModel{
    protected int $id;
    protected string $Firstname;
    protected string $Lastname;
    protected RoleModel $role;
    protected string $mode;
    protected  $courses = [];
    


    public function __construct(string $Firstname, string $Lastname){
        $this->Firstname = $Firstname;
        $this->Lastname = $Lastname;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->Firstname;
    }

    public function getLastname(): string
    {
        return $this->Lastname;
    }

    public function getrole(): RoleModel
    {
        return $this->role;
    }

    public function getMode(): string
    {
        return $this->mode;
    }





    public function setFirstname(string $Firstname)
    {
        $this->Firstname = $Firstname;
    }

    public function setLastname(string $Lastname)
    {
        $this->Lastname = $Lastname;
    }

    public function setrole(RoleModel $role)
    {
        $this->role = $role;
    }

    public function setmode(string $mode) //for Administrateur?
    {
        $this->mode = $mode;
    }

    public function setCours(array $courses)
    {
        foreach($courses as $cours){
            $this->courses [] = $cours;
            
        }
    }



    public function create()
        {
            $query = "INSERT INTO User(FirstName, LastName) VALUES (:FirstName, :LastName)";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':FirstName', $this->Firstname);
            $stmt->bindParam(':LastName', $this->Lastname);
            $stmt->execute();
            $this->id = Database::getInstance()->getConnection()->lastInsertId();

        }
    
        public static function delete($id)
        {
            $query = "DELETE FROM User WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

        }
    

        public static function update($id, $Firstname, $Lastname, $id_role)
        {
            $query = "UPDATE User SET Firstname = :Firstname, Lastname = :Lastname WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':FirstName', $Firstname);
            $stmt->bindParam(':LastName', $Lastname);
            $stmt->execute();
    
        }
    
        public static function read(int $id): EtudiantModel
        {
            $query = "SELECT * FROM User WHERE id = :id";
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');

            if($stmt->fetch()->mode != "newPerson")
            return $stmt->fetch();

        }
}
