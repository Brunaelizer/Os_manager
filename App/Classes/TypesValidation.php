<?php

namespace App\Classes;

class TypesValidation
{
    private $errorValidate;

    public function __construct()
    {
        $this->errorValidate = new ErrorsValidate();
    }

    public function required($field)
    {
        if (empty($_POST[$field])) {
            $message = "O campo {$field} é obrigatório.";
            $this->errorValidate->add($field, $message);
        }
    }
    public function email($field)
    {
    }
    public function phone()
    {
    }
    public function cep()
    {
    }
    public function ddd()
    {
    }
}
