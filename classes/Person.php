<?php
declare(strict_types=1);

namespace classes;

class Person {
    private string $login, $password;

    public function __get($login) : void
    {
        echo $this->$login;
    }

    public function __set(string $login, mixed $value) : void
    {
        $this->$login = $value;
    }

    public function __toString() : string
    {
        return "Login: $this->login".PHP_EOL."Password: $this->password".PHP_EOL;
    }

    public function __serialize() : array
    {
        return [
            'login' => $this->login,
            'password' => $this->password,
        ];
    }

    public function __unserialize(array $data) : void
    {
        $this->login = $data['login'];
        $this->password= $data['password'];
    }
}