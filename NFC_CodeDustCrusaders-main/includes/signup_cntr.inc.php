<?php

declare(strict_types=1);

// ERROR HANDLERS

function is_input_empty( string $username, string $email, string $pwd)
{
    return (empty($username)||empty($email)||empty($pwd));
}


function is_email_invalid(string $email)
{
    return (!filter_var($email, FILTER_VALIDATE_EMAIL));
}


function is_username_taken( object $pdo, string $username)
{   //the get_usrname will check the database for the given username 
    //and if there are any existing same accounts then it will return 
    //that row else it will not return anytihng 
    return (get_username( $pdo, $username));
}

function is_email_registered( object $pdo, string $email)
{   
    return (get_email($pdo, $email));
}

function create_user( object $pdo, string $username, string $email, string $pwd){
    insert_user($pdo, $username, $email, $pwd);
}