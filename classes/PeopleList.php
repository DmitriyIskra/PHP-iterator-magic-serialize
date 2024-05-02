<?php
declare(strict_types=1);

namespace classes;

use Iterator;

class PeopleList implements Iterator {
    private $position = 0;
    private $list = [];

    public function __set(string $name, mixed $value) : void
    {
        $this->$name[] = $value;
    }

    public function current(): mixed
    {
        return $this->list[$this->position];
    }
    public function key(): mixed
    {
        return $this->position;
    }
    public function next(): void
    {
        ++$this->position;
    }
    public function rewind(): void
    {
        $this->position = 0;
    }
    public function valid(): bool{
        return isset($this->list[$this->position]);
    }
}