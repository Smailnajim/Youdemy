<?php
class General{
    protected int $id= 0;
    protected string $name;

    public function getId()
    {
        return $this->id;
    }
    public function getname()
    {
        return $this->name;
    }

    public function setname(string $name)
    {
        $this->name = $name;
    }

}