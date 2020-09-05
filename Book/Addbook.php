<?php
class Addbook
{
    public $data = 0;


    public function __construct()
    {
        $this->isbn = 0;
        $this->author = '';
        $this->year = 'Not registered';
        $this->sql = '';
        global $db;

    }

    public function greet()
    {

        return "Hello from " . self::class . "\n";
    }

    public function checkISBN()
    {
        $verify = [10, 13];
        $numlenght = mb_strlen($this->data);
        while ((!is_numeric($this->data)) || (!in_array($numlenght, $verify))) {
            echo "\n Please insert ISBN\n ISBN format contains either 10 or 13 numbers \n\n";
            $this->data = readline();
            $numlenght = mb_strlen($this->data);
        }
        $this->isbn = $this->data;
        $this->author = "eu la computer";
        $this->year = date('Y');

    }
}
