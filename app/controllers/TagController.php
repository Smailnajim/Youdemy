<?php
    class TagController
    {
        public function create_crud(TagModel $Tag)
        {
            $Tag->create();
        }

        public function delete_crud($id)
        {
            TagModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            TagModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($idS, $idF)
        {
            TagModel::read($idS, $idF );
        }
    }
