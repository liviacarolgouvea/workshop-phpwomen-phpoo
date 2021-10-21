<?php

class Estudante
{
    public $matricula;
    public $ira;

    public function disciplinasMatriculadas()
    {
        return 'PHP Orientado a Objetos';
    }

    public function atualizaIRA($nota)
    {
        $this->ira += $nota;
        return $this->ira;
    }
}
