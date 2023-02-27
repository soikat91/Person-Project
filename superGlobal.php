<?php
require_once "person.php";


if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];

        $person=new Person;
        $person->setName($name);
        $person->setEmail($email);

        echo "Name: {$person->getName()}";
        echo "<br>";
        echo "Email: {$person->getEmail()}\n";

}