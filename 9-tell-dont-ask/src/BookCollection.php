<?php

namespace Acme;

class BookCollection {
    protected $books;

    public function __construct ($books)
    {
        $this->books = $books;    
    }
    
    public function books()
    {
        return $this->books;
    }

    public function contains($book)
    {
        return in_array($book, $this->books);
    }

    public function remove($book)
    {
        if (!$this->contains($book)) {
            throw new \Exception($book.' is not available.');
        }
        return new self(array_diff($this->books, [$book]));
    }
}
