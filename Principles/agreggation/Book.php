<?php
namespace SOLID\agreggation;

class Book
{
    private $name;
    private $price;
    private $author; //author

    public function __construct($name, $price, $author)
    {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAuthor()
    {
        return $this->author;
    }

}
