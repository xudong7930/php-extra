<?php
/**
 * PHP5.6 In minites.
 */

// example 1
class Foo {
    const BUSINESS_FEE = .01;
    const TAX = .07 + .02 + self::BUSINESS_FEE;
}

echo Foo::TAX;


// example 2: 展开运算符
function objectHasAttributes()
{
    $args = func_get_args();
    $object = array_shift($args);
    var_dump($object, $args);
}

function objectHasAttributes2($object, ...$attribute)
{
    var_dump($object);
    var_dump($attribute);
}

objectHasAttributes('object', 'dummy', 'tasty', 'goody');
objectHasAttributes2('object', 'dummy', 'tasty', 'goody');


// example 3:
function add($x, $y, $z)
{
    return $x + $y + $z;
}

$numbers = [11, 44, 77];

var_dump(
    add(...$numbers)
);
