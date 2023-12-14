<?php
declare(strict_types=1);
require_once '../Transaction.php';

// $transaction = new Transaction(43, 'Transaction 1');
// var_dump($transaction); // object(Transaction)#1 (2) { ["amount"]=> NULL ["description"]=> NULL }|| object(Transaction)#1 (0) { ["amount"]=> uninitialized(float) ["description"]=> uninitialized(string) } if we use type hint on class then this output
// var_dump($transaction->amount); // NULL
// $transaction->amount = 900;
// var_dump($transaction->amount); // 900
// var_dump($transaction);  // object(Transaction)#1 (2) { ["amount"]=> float(43) ["description"]=> string(13) "Transaction 1" }
// var_dump($transaction->amount); // float(43)
// var_dump($transaction->description); //  string(13) "Transaction 1"

// $transaction = new Transaction(100, 'Transaction 1');
// $transaction->addTax(15); 
// echo $transaction->getAmount(); //115
// $transaction->addDiscount(15); 
// echo $transaction->getAmount(); //97.75
$amount= (new Transaction(100, 'Transaction 1'))
            ->addTax(8)
            ->addDiscount(10);
            // ->getAmount();
// var_dump($amount); // DestructTransaction 1float(97.2) //no reference of that object remain
var_dump($amount->getAmount()); // float(97.2) DestructTransaction 1 cause reference of that object remain
// $transaction1 = (new Transaction(100, 'Transaction 1'))
//             ->addTax(8)
//             ->addDiscount(10);

// $transaction2 = (new Transaction(200, 'Transaction 2'))
//             ->addTax(9)
//             ->addDiscount(15);
// var_dump($transaction1->getAmount(), $transaction2->getAmount()); // float(97.2) float(185.3)

$str = '{"name": "reja", "age": 21}';
var_dump(json_decode($str)); //object(stdClass)#2 (2) { ["name"]=> string(4) "reja" ["age"]=> int(21) }
var_dump(json_decode($str, true)); //object(stdClass)#2 (2) { ["name"]=> string(4) "reja" ["age"]=> int(21) }

$obj = new \stdClass();
var_dump($obj); //object(stdClass)#2 (0) { }

$obj->name = "reja";
var_dump($obj); //  object(stdClass)#2 (1) { ["name"]=> string(4) "reja" }

$arr = [23,45,48];
var_dump((object)$arr); //object(stdClass)#3 (3) { ["0"]=> int(23) ["1"]=> int(45) ["2"]=> int(48) }

$obj1 = (object)$arr;
// var_dump($arr->1); //Parse error: syntax error, unexpected integer "1", expecting identifier or variable or "{" or "$" 
var_dump($obj1->{0});  // int(23)

$numeric = (object)1;
var_dump($numeric); //object(stdClass)#4 (1) { ["scalar"]=> int(1) }
var_dump($numeric->scalar); // int(1)

$boolean = (object) true;
var_dump($boolean); // object(stdClass)#5 (1) { ["scalar"]=> bool(true) }

$string = (object) 'reja';
var_dump($string); //object(stdClass)#6 (1) { ["scalar"]=> string(4) "reja" }