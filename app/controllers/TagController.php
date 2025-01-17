<?php
    class TagController
    {
        public function create(TagModel $Tag)
        {
            $Tag->create();
        }

        public function delete($id)
        {
            TagModel::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            TagModel::update($id, $titre, $description, $video, $document);
        }

        public function read($idS, $idF)
        {
            TagModel::read($idS, $idF );
        }
    }
