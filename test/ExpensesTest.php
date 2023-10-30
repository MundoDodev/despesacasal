<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;



require_once ("../vendor/autoload.php");




 


final class ExpensesTest extends TestCase
{
    public function testPushAndPop(): void
    {
        $expenses = [];
        array_push($expenses, new  Expense("M","Conta de Luz",350.45,CLock::today()));
        array_push($expenses, new  Expense("E","Conta de Telefone",80.14,CLock::today()));

        $this->assertEquals(2, count($expenses));  
    }
}


