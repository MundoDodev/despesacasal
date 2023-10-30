<?php

namespace App\Expenses;


class ExpenseCalculator{
    private $expenses=[];
    public function __construct($expenses){
        $this->expenses = $expenses;
    }

    public function filter($month,$year){

        $expensesAux =[];
        $filter =sprintf("%s-%s",str_pad($year ,4 , '0' , STR_PAD_LEFT),str_pad($month , 2 , '0' , STR_PAD_LEFT));
        foreach($this->expenses as $key =>$expense){
           if(strpos($expense->launch,$filter)!==FALSE){
            $expensesAux[]=$expense;
           }
            
        }
        $this->expenses = $expensesAux;
    }
    public function summary(){
        $sum=0;
        foreach($this->expenses as $key =>$expense){
            $sum+=$expense->value;
        }

        return  $sum;
    }
}