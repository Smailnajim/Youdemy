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


    private function __construct(string $titre, string $description, string $video, string $document, array $tags, EnseignantModel $enseignant, CategorieModel $categorie){
        $this->titre = $titre;
        $this->description = $description;
        $this->video = $video;
        $this->document = $document;
        foreach($tags as $tag)
            $this->tag[] = $tag;
        $this->enseignant = $enseignant;
        $this->categorie = $categorie;

    }

    public static function createCours(string $titre, string $description, string $video, string $document, array $tags, EnseignantModel $enseignant, CategorieModel $categorie): self
    {
        return new self($titre, $description, $video, $document, $tags, $enseignant, $categorie);
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
        $querty = "INSERT INTO Cours (titre, description, video, document, id_Categorie, id_enseignant) VALUES (:titre, :description, :video, :document, :id_Categorie, :id_enseignant)";
        $stmt = Database::getInstance()->getConnection()->prepare($querty);

        $stmt->bindParam(":document", $this->document);
        $stmt->bindParam(":video", $this->video);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":titre", $this->titre);
        $id = $this->categorie->getId();
        $stmt->bindParam(":id_Categorie", $id);
        $id2 = $this->enseignant->getId();
        $stmt->bindParam(":id_enseignant", $id2);
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

    public static function read(int $id)
    {
        $query = "SELECT * FROM Cours WHERE id = :id";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cours');
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function readAll()
    {
        $query = "SELECT * FROM Cours";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cours');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}