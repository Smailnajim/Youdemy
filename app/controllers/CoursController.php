<?php

class CoursController
    {
        public function create(Cours $cours)
        {
            $cours->create();
        }

        public function delete($id)
        {
            Cours::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            Cours::update($id, $titre, $description, $video, $document);
        }

        public function read($idS, $idF)
        {
            Cours::read($idS, $idF );
        }
    }