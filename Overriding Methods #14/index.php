<?php
class Book
{
    public $authorsName = "Fred";
    public function author()
    {
        return "The authors name is: " . $this->authorsName . "\n";
    }
    public function getAuthor()
    {
        echo self::author();
    }
}
class NewBook extends Book
{
    public function author()
    {
        return parent::author() . "The authors names is: Joe" . "\n";
    }
}

$book = new NewBook;
echo $book->author();
// The authors name is: Fred
// The authors names is: Joe
