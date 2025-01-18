<?php
    class RoleController
    {

        public function createModel($name): RoleModel
        {
            $role = new RoleModel();
            $role->setname($name);
            $role->create();//for get id
            return $role;
        }

        public function create_crud(RoleModel $role)
        {
            $role->create();
        }

        public function delete_crud($id)
        {
            RoleModel::delete($id);
        }

        public function update_crud($id, $titre, $description, $video, $document)
        {
            RoleModel::update($id, $titre, $description, $video, $document);
        }

        public function read_crud($idS, $idF)
        {
            RoleModel::read($idS, $idF );
        }
    }
