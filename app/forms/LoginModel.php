<?php

class loginForm{
    public $FirstName;
    public $lastName;
    public $email;
    public $role;

    public function __construct(string $FirstName, string $lastName, string $email)
    {
        $this->FirstName = $FirstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

}