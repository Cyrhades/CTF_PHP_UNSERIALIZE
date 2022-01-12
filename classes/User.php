<?php

class User
{
    private $lastName;
    private $firstName;
    private $email;

    public function __construct($lastName, $firstName, $email)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
    }

    public function __toString()
    {
        return $this->lastName.' '.$this->firstName.' ('.$this->email.')';
    }
}