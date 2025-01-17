<?php
    class EnseignantController
    {
        public function create(EnseignantModel $Enseignant)
        {
            $Enseignant->create();
        }

        public function delete($id)
        {
            RoleModel::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            RoleModel::update($id, $titre, $description, $video, $document);
        }

        public function read($id)
        {
            RoleModel::read($id);
        }
    }
