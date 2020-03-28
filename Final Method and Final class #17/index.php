<?php
final class Book
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
// Fatal error: Class NewBook may not inherit from final class (Book) in
class NewBook extends Book
{
    public static function author()
    // Fatal error: Cannot override final method Book::author() in ...
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
