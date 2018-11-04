<?php

namespace patterns\iterator;

use Iterator;

/**
 * Для класса BookStorage создаём итератор, который перебирает названия книг.
 * PHP уже имеет интерфейс итератора, который мы и реализуем.
 * Это позволит нам использовать наш класс в конструкциях foreach
 */
class BookNameIterator implements Iterator {
    /** @var Book[] */
    private $books = [];
    /** @var int */
    private $position;

    public function __construct($books)
    {
        $this->books = array_values($books);
    }

    public function current()
    {
        return isset($this->books[$this->position]) ? $this->books[$this->position]->name : null;
    }

    public function next()
    {
        $this->position ++;
        return $this->current();
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return $this->position < count($this->books);
    }

    public function rewind()
    {
        $this->position = 0;
    }
}