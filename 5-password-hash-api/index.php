<?php
// cost 破解难度
$two = password_hash('change', PASSWORD_BCRYPT, ['cost' => 10]);
$one = password_hash('change', PASSWORD_DEFAULT);
var_dump($one, $two);

if (password_verify('change', $one)) {
    var_dump('password correct');
}
