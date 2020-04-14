<?php

class Book
{
    private $author;
    private $title;

    function __construct($author, $title)
    {
        $this->author = $author;
        $this->title  = $title;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}

class BookAdapter
{

    private $book;

    function __construct(Book $book)
    {
        $this->book = $book;
    }

    function getAuthorAndTitle()
    {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }
}

// Usage
$book = new Book("George R. R. Martin", "Game of Thrones");
$bookAdapter = new BookAdapter($book);
echo $bookAdapter->getAuthorAndTitle()."\n";
//Output: Game of Thrones by George R. R. Martin