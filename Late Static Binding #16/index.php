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
        echo static::author();
    }
}
class NewBook extends Book
{
    public static function author()
    {
        return "The authors names are: " . self::$authorsNames . " and Joe Bloggs" . "\n";
    }
}

$book = new Book;
echo $book->getAuthor(); // The authors names are:Fred Bloggs

$newBook = new NewBook;
echo $newBook->getAuthor(); // The authors names are: Fred Bloggs and Joe Bloggs
// Expected: The authors names are:Fred Bloggs and Joe Bloggs
NewBook::getAuthor(); // The authors names are: Fred Bloggs and Joe Bloggs
