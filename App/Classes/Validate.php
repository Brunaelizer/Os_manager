<?php

namespace App\Classes;

class Validate
{
    private $typeValidation;

    public function __construct()
    {
        $this->typeValidation = new TypesValidation();
    }
    public function validate($rules)
    {
        foreach ($rules as $field => $method) {
            if (substr_count($method, '|') > 0) {
                $explodePipe = explode('|', $method);
                foreach ($explodePipe as $methodPipe) {
                    $this->typeValidation->$methodPipe($field);
                }
            } else {
                $this->typeValidation->$method($field);
            }
        }
    }
}
