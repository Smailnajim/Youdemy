<?php
    class AdministrateurController
    {
        public function create_crud(AdministrateurModel $administrateurModel)
        {
            $administrateurModel->create();
        }

        public function delete_crud($id)
        {
            AdministrateurModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            AdministrateurModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($id)
        {
            AdministrateurModel::read($id);
        }
    }
