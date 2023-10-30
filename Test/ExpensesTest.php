<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Expenses\Expense;
use App\System\Clock;
use App\Expenses\ExpenseCalculator;






 


final class ExpensesTest extends TestCase
{
    public function testAdicionarECalcularDespesasSemFiltros(): void
    {
        $expenses = [];
        array_push($expenses, new  Expense("M","Conta de Luz",350.45,CLock::today()));
        array_push($expenses, new  Expense("E","Conta de Telefone",80.14,CLock::today()));

        $expenseCalculator =  new ExpenseCalculator($expenses);
        $this->assertEquals(2, count($expenses));  
        $this->assertEquals($expenseCalculator->summary(), 430.59);  
         
    }


    public function testAdicionarECalcularDespesasComFiltros(): void
    {
        $expenses = [];
        array_push($expenses, new  Expense("M","Conta de Luz",10,CLock::today()));
        array_push($expenses, new  Expense("E","Conta de Telefone",20,CLock::today()));
        array_push($expenses, new  Expense("E","Conta de TV",30,"2023-09-15 15:15:01"));
        array_push($expenses, new  Expense("E","Conta de Carro",40,"2023-09-16 15:15:01"));

        array_push($expenses, new  Expense("E","Conta de TV",100,"2024-09-15 15:15:01"));
        array_push($expenses, new  Expense("E","Conta de Carro",40,"2024-09-16 15:15:01"));



        $expenseCalculator =  new ExpenseCalculator($expenses);
        $expenseCalculator->filter(Clock::Month(),Clock::Year());
        $this->assertEquals(6, count($expenses));  
        $this->assertEquals($expenseCalculator->summary(), 30);  


        $expenseCalculator =  new ExpenseCalculator($expenses);
        $expenseCalculator->filter(9,2023);
        $this->assertEquals($expenseCalculator->summary(), 70);  

        $expenseCalculator =  new ExpenseCalculator($expenses);
        $expenseCalculator->filter(9,2024);
        $this->assertEquals($expenseCalculator->summary(), 140);  


       
      
         
    }
}



