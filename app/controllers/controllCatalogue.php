<?php
class ControllCatalougue extends controller{

    public function getTenCours(int $numberPage)
    {
        return cours::read(($numberPage * 10)-9, $numberPage * 10);
    }

    
}