<?php
declare(strict_types=1);
use classes\PeopleList;
use classes\Person;

include "autoload.php";


$person1 = new Person();
$person1->login = 'John';
$person1->password = '123';

echo '-----------serialized-----------'.PHP_EOL.PHP_EOL;
$serialized1 = serialize($person1);
var_dump($serialized1);

echo '-----------unserialize-----------'.PHP_EOL.PHP_EOL;
$newStr = str_replace("\"login\";s:4:\"John\"", "\"login\";s:6:\"Casper\"", $serialized1);

$person2 = unserialize($newStr);
echo 'object person2:'.PHP_EOL;
var_dump($person2);

echo $person2->login.PHP_EOL;
echo $person2->password.PHP_EOL;


echo '-----------PeopleList-----------'.PHP_EOL;

$peopleList = new PeopleList();

$peopleList->list = $person1;
$peopleList->list = $person2;

foreach($peopleList as $key => $value) {
    echo "value \n".$value;
    
    echo "\n";
}
