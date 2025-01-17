<?php
// include_once __DIR__.'/Cours.php';

class UserModel{
    protected int $id;
    protected string $Firstname;
    protected string $Lastname;
    protected string $email;
    protected RoleModel $role;
    protected string $mode;
    protected  $courses = [];
    


    public function __construct(string $Firstname, string $Lastname, string $email){
        $this->Firstname = $Firstname;
        $this->Lastname = $Lastname;
        $this->Lastname = $email;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->Firstname;
    }

    public function getLastname(): string
    {
        return $this->Lastname;
    }

    public function getrole(): RoleModel
    {
        return $this->role;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function getemail(): string
    {
        return $this->email;
    }




    public function setemail(string $email)
    {
        $this->Firstname = $email;
    }

    public function setFirstname(string $Firstname)
    {
        $this->Firstname = $Firstname;
    }

    public function setLastname(string $Lastname)
    {
        $this->Lastname = $Lastname;
    }

    public function setrole(RoleModel $role)
    {
        $this->role = $role;
    }

    public function setmode(string $mode) //for Administrateur?
    {
        $this->mode = $mode;
    }

    public function setCours(array $courses)
    {
        foreach($courses as $cours){
            $this->courses [] = $cours;
            
        }
    }

}
