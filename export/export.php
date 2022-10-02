<?php

class export{
    
    public $type;
    public function __construct($type)
    {
        $this->type =  new $type; 
    }

    public function print(){
        $this->type->exportdata(); 
    }
}