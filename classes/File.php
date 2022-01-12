<?php

class File
{
    private $file;

    public function __construct($file)
    {
        if(file_exists($file)) {
            $this->file = $file;	
        } else {
            return false;
        }
    }

    public function __toString()
    {
        return file_get_contents($this->file);
    }
}