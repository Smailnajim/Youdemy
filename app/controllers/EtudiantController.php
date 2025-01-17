<?php
    class EtudiantModel
    {
        public function create(RoleModel $Tag)
        {
            $Tag->create();
        }

        public function delete($id)
        {
            RoleModel::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            RoleModel::update($id, $titre, $description, $video, $document);
        }

        public function read($idS, $idF)
        {
            RoleModel::read($idS, $idF );
        }
    }
