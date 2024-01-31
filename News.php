<?php 
class News{
    private $title;
    private $text;
    private $img;
    private $category;
    private $name;
    private $lastName;
    private $date;

    public function __construct($title, $text, $img, $category, $name, $lastName ,$date){
            $this->title=$title;
            $this->text=$text;
            $this->img=$img;
            $this->category=$category;
            $this->name=$name;
            $this->lastName=$lastName;
            $this->date=$date;

    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function getText(){
        return $this->text;
    }
    public function setText($text){
        $this->text=$text;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($img){
        $this->img=$img;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setCategory($category){
        $this->category=$category;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName=$lastName;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date=$date;
    }
}
?>