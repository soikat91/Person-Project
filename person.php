<?php


class Person{
    private $name,$email;

    function setName($name){

        $this->name=$name;
    }
    function setEmail($email){

        $this->email=$email;
    }

    function getName(){

        return $this->name;
    }  
    
    function getEmail(){

        return $this->email;
    }

}
