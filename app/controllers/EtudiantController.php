<?php
    class RoleController
    {
        public function create_crud(RoleModel $Tag)
        {
            $Tag->create();
        }

        public function delete_crud($id)
        {
            RoleModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            RoleModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($id)
        {
            RoleModel::read($id);
        }
    }
