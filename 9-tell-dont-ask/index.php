<?php
require 'vendor/autoload.php';

use Acme\BookCollection;
use Acme\Elevator;
use Acme\EnvironmentMonitor;
use Acme\Library;
use Acme\Member;

// example one;
$elevator = new Elevator(new EnvironmentMonitor);

$elevator->addPerson('xudong');
$elevator->addPerson('haoshuyun');
// $elevator->addPerson('lvlinlin');
$elevator->checkForAlarm();



// example two;
$books = [
    'detective conan',
    'total recall',
    'back to future'
];

$library = new Library(new BookCollection($books));

$jeffery = new Member;
$jeffery->checkOut('total recall', $library);
$jeffery->checkOut('back to1 future', $library);

var_dump($library->books()->books());
