<?php

class CategorieController
    {
        public function create(CategorieModel $Categorie)
        {
            $Categorie->create();
        }

        public function delete($id)
        {
            CategorieModel::delete($id);
        }

        public function update($id, $titre, $description, $video, $document)
        {
            CategorieModel::update($id, $titre, $description, $video, $document);
        }

        public function read($idS, $idF)
        {
            CategorieModel::read($idS, $idF );
        }
    }