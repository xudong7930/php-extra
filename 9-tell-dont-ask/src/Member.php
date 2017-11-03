<?php

namespace Acme;

class Member {
    protected $books = [];

    public function checkout($book, Library $library)
    {
        $library->checkOut($book);
        $this->books[] = $book;
    }
}
