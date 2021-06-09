<?php

class Book{
    public $title;
    public $author;
    public $price;
    function __construct($title,$author,$price)
    {
        $this->author = $author;
        $this->price = $price;
        $this->title = $title;
    }
    function getTitle(){
        return $this->title;
    }
    function getAuthor(){
        return $this->author;
    }
    function getPrice(){
        return $this->price;
    }
    function setTitle($title){
        $this->title=$title;
    }
    function setAuthor($author){
        $this->author=$author;
    }
    function setPrice($price)
    {
        $this->price = $price;

    }
    function __toString()
    {
        return "Book title: ".$this->getTitle()." author: ".$this->getAuthor(). " with price: ".$this->getPrice();
    }
}
class GoldenEditionBook extends Book {
    public $role;
    function __construct($title, $author, $price)
    {
        parent::__construct($title, $author, $price);
    }
    function getPrice()
    {
        return parent::getPrice()+30;
    }
}
$book = new Book('Book1','JK Rowling','32');
 echo $book;
 $boi = new GoldenEditionBook('Book Title','Funny Author','50');
 echo $boi;