<?php
// Autoloader
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$user = null;
if(isset($_COOKIE['user'])) {
    $user = unserialize($_COOKIE['user']);
}
elseif($user === null) {
    $user = new User('Doe', 'John', 'j.doe@yopmail.com');
    setcookie(
        "user", 
        serialize($user), 
        time()+3600
    );
}

echo $user;