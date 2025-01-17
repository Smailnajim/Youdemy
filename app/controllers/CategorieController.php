<?php

class CategorieController
    {
        public function create_crud(CategorieModel $Categorie)
        {
            $Categorie->create();
        }

        public function delete_crud($id)
        {
            CategorieModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            CategorieModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($idS, $idF)
        {
            CategorieModel::read($idS, $idF );
        }
    }