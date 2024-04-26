<?php
declare(strict_types=1);

namespace classes;
use interfaces\Iterator;
class PeopleList implements Iterator {
    private $list = [];

    public function __set(string $name, mixed $value) : void
    {
        $this->$name[] = $value;
    }

    public function __get($name) : void
    {
        foreach($this->$name as $value) {
            echo $value.PHP_EOL;
        }
    }
}