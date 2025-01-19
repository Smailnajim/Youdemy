<?php
    class EnseignantController 
    {
        public function createEnseignant($Firstname, $Lastname, $email, RoleModel $role):EnseignantModel
        {
            $techer = new EnseignantModel($Firstname, $Lastname, $email, $role);
            return $techer;
        }

        public function createCours(string $titre, string $description, string $video, string $document, array $tags, EnseignantModel $enseignant, CategorieModel $categorie): Cours
        {
            $cours = $enseignant->createCours ( $titre,  $description,  $video,  $document,  $tags,  $enseignant,  $categorie);
            return $cours;
        }

        public function create_crud(EnseignantModel $Enseignant)
        {
            $Enseignant->create();
        }

        public function delete_crud($id)
        {
            EnseignantModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            EnseignantModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($id)
        {
            EnseignantModel::read($id);
        }

        public function readByFormLpogin_crud(loginForm $formLogin)
        {
            return EnseignantModel::readByFormLogin($formLogin);
        }
    }
