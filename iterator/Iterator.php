<?php

namespace patterns\iterator;

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/BookNameIterator.php';
require_once __DIR__ . '/BookStorage.php';

function print_book_names(BookStorage $books) {
    echo "BookStorage content:\n";
    foreach ($books->getIterator() as $bookName) {
        /** @var Book $book */
        echo $bookName . "\n";
    }

    echo "\n";
}

$books = new BookStorage();
$books->add(new Book('Book 1'));
$books->add(new Book('Book 2'));
$books->add(new Book('Book 3'));
$books->add(new Book('Book 4'));

$book5 = new Book('Book 5');
$books->add($book5);

// Распечатаем BookStorage
print_book_names($books);

// Интересно! Если изменить название книги, то при распечатке это изменение тоже будет учтено
$book5->name = 'Book 55';
print_book_names($books);

