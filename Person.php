<?php
class Person {
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }


  function getName(){
    return $this -> name;
  }

  function getLastName(){
    return $this -> lastname;
  }

  function getAge(){
    return $this -> age;
  }

  function getMother(){
    return $this -> mother;
  }

  function getFather(){
    return $this -> father;
  }

  function getInfo(){
    return "<h3>Моя семья</h3><br>"."Меня зовут ".
    $this->getName()." ".
    $this->getLastName().". "."Мне ".
    $this->getAge()." лет.<br>".
    "Моя мама ".
    $this->getMother()->getName()." ".
    $this->getMother()->getLastName().". "."Ей ".
    $this->getMother()->getAge()." лет.<br>".
    "Мой папа ".
    $this->getFather()->getName()." ".
    $this->getFather()->getLastName().". "."Ему ".
    $this->getFather()->getAge()." лет.<br>".
    "Мой дедушка (мамин отец) ".
    $this->getMother()->getMother()->getName()." ".
    $this->getMother()->getMother()->getLastName().". "."Ему ".
    $this->getMother()->getMother()->getAge()." лет.<br>".
    "Моя бабушка (мамина мама) ".
    $this->getMother()->getFather()->getName()." ".
    $this->getMother()->getFather()->getLastName().". "."Ей ".
    $this->getMother()->getFather()->getAge()." год.<br>".
    "Моя бабушка (папина мама) ".
    $this->getFather()->getMother()->getName()." ".
    $this->getFather()->getMother()->getLastName().". "."Ей ".
    $this->getFather()->getMother()->getAge()." лет.<br>".
    "Мой дедушка (папин отец) ".
    $this->getFather()->getFather()->getName()." ".
    $this->getFather()->getFather()->getLastName().". "."Ему ".
    $this->getFather()->getFather()->getAge()." лет.";
  }
}

$anna = new Person("Anna", "Popova", 61);
$vladimir = new Person("Vladimir", "Ivanov", 69);
$viktor = new Person("Viktor", "Ivanov", 66);
$olya = new Person("Olya", "Ivanova", 67);


$alex = new Person("Alex", "Ivanov", 47, $olya, $viktor);
$katya = new Person("Katya", "Ivanova", 45, $vladimir, $anna);
$valera = new Person("Valera", "Ivanov", 13, $katya, $alex);


echo $valera -> getInfo();
