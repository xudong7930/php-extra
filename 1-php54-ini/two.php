<?php

namespace Laracasts {
    const TAX = .08;

    function sayHi() {
        echo "hi".PHP_EOL;
    }
}

namespace {
    use Laracasts as L;
    use function Laracasts\sayHi;
    use const Laracasts\TAX;

    L\sayHi();
    sayHi();
    echo TAX;
}
