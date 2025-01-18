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

        public function read_crud($id)
        {
            return Cours::read($id);
        }

        public function readAll_crud()
        {
            return Cours::readAll();
        }
    }