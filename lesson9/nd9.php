<?php
class Post
{
private const MAX_LENGTH = 10;
private $title;
private $content;
private $author;

function getTitle(){
    return $this->title;
    }

function getContent(){
    return $this->content;
    }

function getAuthor(){
    return $this->author;
    }

function setTitle($title){
    $this->title = $title;
    }
        
function setContent($content){
    if(strlen($content)>self::MAX_LENGTH){
        $this->content = "Max length is: ".self::MAX_LENGTH;
    }else
    return $this->content = $content;
    }
    
function setAuthor($person){
    return $this->author = $person;
    }    
}

class Person
{
    private $id;
    private $name;

    function setId($id){
        $this->id = $id;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
    
    function getId(){
        return $this->id;
    }
}

$person = new Person();
$person->setName("John");
echo $person->getName();
$person->setId(10);
echo $person->getId();

$post = new Post();
$post->setTitle("My title");
echo $post->getTitle()."<br>";
$post->setContent("my content");
echo $post->getContent()."<br>";
$post->setAuthor($person);
var_dump($post->getAuthor());
?>