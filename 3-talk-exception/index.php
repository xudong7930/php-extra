<?php
class FileNotFoundException extends Exception {

}

// one
throw new FileNotFoundException('your file does not find on our system.');

// two
try {
    throw new FileNotFoundException('your file does not find on our system.');
} catch (Exception $e) {
    var_dump($e);
}

