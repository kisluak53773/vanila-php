<?php

declare(strict_types=1);

function validatePassword(string $password): bool
{
    $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';

    return !!preg_match($pattern, $password);
}

$password = 'StrongPwd123!';

if(validatePassword($password)){
    echo 'Password valid' . PHP_EOL;
} else {
    echo 'Password should contain at least eight characters, at least one letter, one number and one special character' . PHP_EOL;
}

function validateIp(string $ip): bool
{
    $pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';

    return !!preg_match($pattern, $ip);
}

$ip = '127.0.0.1';

var_dump(validateIp($ip));
