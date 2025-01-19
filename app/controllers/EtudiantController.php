<?php
    class EtudiantController
    {
        public function create_crud(EtudiantModel $Tag)
        {
            $Tag->create();
        }

        public function delete_crud($id)
        {
            EtudiantModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            EtudiantModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($id)
        {
            EtudiantModel::read($id);
        }

        public function readByFormLpogin_crud(loginForm $formLogin)
        {
            return EtudiantModel::readByFormLogin($formLogin);
        }
    }
