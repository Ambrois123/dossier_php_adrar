<?php
class Book {
    public function __contruct(
        private  ?string $name = null,
        private ?string $publisher = null,
        private array $authors = [],
    ){}
}