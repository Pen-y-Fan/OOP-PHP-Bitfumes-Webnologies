<?php
class Book
{
    public static $authorsNames = "Fred Bloggs";
    public static function author()
    {
        return "The authors names are: " . self::$authorsNames . "\n";
    }
    public static function getAuthor()
    {
        echo self::author();
    }
}
class newBook extends Book
{
    public static function author()
    {
        return "The authors names are: " . self::$authorsNames . " and Joe Bloggs" . "\n";
    }
}

$book = new Book;
echo $book->getAuthor(); // The authors names are:Fred Bloggs

$newBook = new newBook;
echo $newBook->getAuthor(); // The authors names are:Fred Bloggs
// Expected: The authors names are:Fred Bloggs and Joe Bloggs
