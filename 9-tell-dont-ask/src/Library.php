<?php

namespace Acme;

class Library {

    protected $books;
    
    public function __construct (BookCollection $books)
    {
        $this->books = $books;
    }

    public function books()
    {
        return $this->books;
    }

    public function checkOut($book)
    {
        $this->books = $this->books->remove($book);
    }
}
