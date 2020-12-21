<?php
namespace SOLID\agreggation;

use SOLID\agreggation\Author;
use SOLID\agreggation\Book;

require_once '../../vendor/autoload.php';

$author = new Author('Younes ELBORAKI', 'younes@yopmail.com');
$book = new Book('Learning SCALA', '38.45', $author);

var_dump($book);
