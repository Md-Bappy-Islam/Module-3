<?php
function generatePassword($length) {
    $allCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $allIndex = strlen($allCharacters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $allCharacters[rand(0, $allIndex)];
    }

    return $password;
}

echo generatePassword(8);





