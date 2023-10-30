<?php

namespace App\Expenses;


class Expense{
    public $uuid;
    public $expense;
    public $person;
    public $value;
    public $createdAt;
    public $launch;



    public function __construct($person,$expense,$value,$launch){
        $this->uuid =  md5(uniqid());
        $this->expense =  $expense;
        $this->person =$person;
        $this->value = $value;
        $this->launch = $launch;
    }

}