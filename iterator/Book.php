<?php

namespace patterns\iterator;

class Book {
    /** @var string */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}