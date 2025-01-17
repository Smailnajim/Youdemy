<?php

class CoursController
    {
        public function create_crud(Cours $cours)
        {
            $cours->create();
        }

        public function delete_crud($id)
        {
            Cours::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            Cours::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($idS, $idF)
        {
            Cours::read($idS, $idF );
        }
    }