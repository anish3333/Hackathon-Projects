<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd){
    return (empty($username) || empty($pwd));
}

function is_username_wrong(bool|array $user){
    return (!$user);
}


function is_password_wrong(string $pwd, string $hashedpwd){

    if(!password_verify($pwd, $hashedpwd)) {
        return true;

    }else{
        return false;
    }
}
