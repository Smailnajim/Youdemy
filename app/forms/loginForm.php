<?php

class loginForm{
    public $FirstName;
    public $LastName;
    public $email;
    public $role;

    public function __construct(string $FirstName, string $lastName, string $email)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $lastName;
        $this->email = $email;
    }

}