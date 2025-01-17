<?php
    class UserController
    {
        public function create(UserModel $user)
        {
            $user->create();
        }

        public function delete(UserModel $user)
        {
            UserModel::delete($user->getId());
        }

        public function update(UserModel $user)
        {
            UserModel::update($user->getId(), $user->getFirstname(), $user->getLastname(), $user->getRole()->getId());
        }

        public function read($id)
        {
            UserModel::read($id );
        }
    }
