<?php

class loginForm{
    public $FirstName;
    private $lastName;
    private $email;

    public function __construct(string $FirstName, string $lastName, string $email)
    {
        $this->FirstName = $FirstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}