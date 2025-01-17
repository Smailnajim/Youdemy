<?php
    class AdministrateurController
    {
        public function create(AdministrateurModel $administrateurModel)
        {
            $administrateurModel->create();
        }

        public function delete($id)
        {
            AdministrateurModel::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            AdministrateurModel::update($id, $titre, $description, $video, $document);
        }

        public function read($id)
        {
            AdministrateurModel::read($id);
        }
    }
