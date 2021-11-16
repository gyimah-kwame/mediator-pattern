<?php

use Kwame\Demo\Colleagues\UserImp;
use Kwame\Demo\Mediators\ChatMediatorImp;

require_once('./vendor/autoload.php');

$mediator = new ChatMediatorImp();
$user_one = new UserImp($mediator, 1, "Kwame");
$user_two = new UserImp($mediator, 2, "Edem");
$user_three = new UserImp($mediator, 3, "Jennifer");

$mediator->addUser($user_one);
$mediator->addUser($user_two);
$mediator->addUser($user_three);


$user_one->send("Hi All");