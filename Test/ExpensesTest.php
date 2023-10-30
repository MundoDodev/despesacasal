<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Expenses\Expense;
use App\System\Clock;



 



 


final class ExpensesTest extends TestCase
{
    public function testAdicionarECalcularDespesas(): void
    {
        $expenses = [];
        array_push($expenses, new  Expense("M","Conta de Luz",350.45,CLock::today()));
        array_push($expenses, new  Expense("E","Conta de Telefone",80.14,CLock::today()));


        $sum=0;
        foreach($expenses as $key =>$expense){
            $sum+=$expense->value;
        }

        $this->assertEquals(2, count($expenses));  
        $this->assertEquals($sum, 430.59);  

       
         
    }
}


