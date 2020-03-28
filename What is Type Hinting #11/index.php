<?php
require "person.php";

class Book
{
    public $price;
    public $authorsNames;

    /**
     * authors function
     *
     * @param integer $price
     *
     * @return void
     */
    public function price(int $price)
    {
        $this->price = $price;
    }

    /**
     * authors function
     *
     * @param array $names
     *
     * @return void
     */
    public function authors(Person $person)
    {
        $this->authorsNames = $person->names();
    }
}

$book = new Book;
$book->price(20);
echo $book->price . "\n"; // 20

// $book->price("abc");
// Fatal error: Uncaught TypeError: Argument 1 passed to Book::price() must be
// of the type int, string given, ..
// TypeError: Argument 1 passed to Book::price() must be of the type int,
// string given, ..

// echo $book->price . "\n"; // without type hinting "abc"

// $book->authors(20); // with type hinting:

// Fatal error: Uncaught TypeError: Argument 1 passed to Book::authors()
// must be of the type array, int given, called in

// TypeError: Argument 1 passed to Book::authors() must be of the type array,
// int given, called in

$authorsName = new Person;

$book->authors($authorsName);

var_dump($book->authorsNames);
/*
array(2) {
[0] =>
string(11) "Fred Bloggs"
[1] =>
string(10) "Joe Bloggs"
}
/*
