<?php
declare(strict_types=1);
use classes\PeopleList;
use classes\Person;

include "autoload.php";

$peopleList = new PeopleList();


$person1 = new Person();
$person1->login = 'John';
$person1->password = '123';

$serialized1 = serialize($person1);
var_dump($serialized1);
file_put_contents("persons.txt", $serialized1);

$newStr = str_replace("\"login\";s:4:\"John\"", "\"login\";s:6:\"Casper\"", $serialized1);

$person2 = unserialize($newStr);
var_dump($person2);

echo $person2->login.PHP_EOL;
echo $person2->password.PHP_EOL;


echo '-----------PeopleList-----------'.PHP_EOL;

$peopleList->list = $person1;
$peopleList->list = $person2;


$peopleList->list;