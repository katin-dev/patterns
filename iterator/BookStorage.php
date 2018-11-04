<?php

namespace patterns\iterator;

class BookStorage {

    /** @var Book[] */
    private $books = [];

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    /**
     * @return BookNameIterator
     */
    public function getIterator() {
        return new BookNameIterator($this->books);
    }
}