<?php

class Cours{
    private int $id;
    private string $titre;
    private string $description;
    private EnseignantModel $enseignant;
    private string $video;
    private string $document;
    private CategorieModel $categorie;
    private array $tag = [];


    

    private function __construct(string $titre, string $description, string $video, string $document, array $tags){
        $this->titre = $titre;
        $this->description = $description;
        $this->video = $video;
        $this->document = $document;
        foreach($tags as $tag)
            $this->tag[] = $tag;

    }

    public static function createCours(string $titre, string $description, string $video, string $document, array $tag): self
    {
        return new self($titre, $description, $video, $document, $tag);
    } 
    
    public function gettitre(): string
    {
        return $this->titre;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function getdescription(): string
    {
        return $this->description;
    }

    public function getenseignant(): EnseignantModel
    {
        return $this->enseignant;
    }

    public function getvideo(): string
    {
        return $this->video;
    }

    public function getdocument(): string
    {
        return $this->document;
    }

    public function getcategorie(): CategorieModel
    {
        return $this->categorie;
    }

    public function gettag(): array
    {
        return $this->tag;
    }
    

    public function settitre(string $titre)
    {
        $this->titre = $titre;
    }

    public function setdescription(string $description)
    {
        $this->description = $description;
    }

    public function setenseignant(EnseignantModel $enseignant)
    {
        $this->enseignant = $enseignant;
    }

    public function setvideo(string $video)
    {
        $this->video = $video;
    }

    public function setdocument(string $document)
    {
        $this->document = $document;
    }

    public function setcategorie(CategorieModel $categorie)
    {
        $this->categorie = $categorie;
    }

    public function settag(array $tag)
    {
        $this->tag = $tag;
    }

    // create at database
    public function create()
    {
        $querty = "INSERT INTO Cours (titre, description, video, document, id_Categorie) VALUES (:titre, :description, :video, :document, :id_Categorie)";
        $stmt = Database::getInstance()->getConnection()->prepare($querty);

        $stmt->bindParam(":document", $this->document);
        $stmt->bindParam(":video", $this->video);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":id_Categorie", $this->categorie->);

        $stmt->execute();

        $this->id = Database::getInstance()->getConnection()->lastInsertId();
    }

    public static function delete($id)
    {
        $query = "DELET FROM Cours WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public static function update($id, $titre, $description, $video, $document)
    {
        $query = "UPDATE Cours SET titre = :titre, description = :description, video = :video, document = :document WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(":document", $document);
        $stmt->bindParam(":video", $video);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":titre", $titre);
        $stmt->execute();

    }

    public static function read(int $idStart, int $idEnd)
    {
        $query = "SELECT * FROM Cours WHERE id >= :idStart AND id <= :idEnd";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cours');
        return $stmt->fetchAll();
    }
}