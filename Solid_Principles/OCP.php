<?php
/*
// Open Closed principle
//Open for extension ..Closed for edit



// مخالف للقواعد لانه محققش اول مبدا انه يبقي كلاس بيعمل حاجة واحدة ومحققش تاني مبدالاني ممكن اعدل فيه 

class Calculator{
    public function calculate($x,$y,$op){
        if($op=="add"){
            return $x+$y;
        }elseif($op=="sub"){
            return $x-$y;
        }elseif($op=="mul"){
            return $x*$y;
        }elseif($op=="div"){
            return $x/$y;
        }
    }
}
$calc=new calculator;
echo $calc->calculate(3,7,"add");
*/
//---------------------------------------------------------

// هنا حققنا اول مبدا انه يبقي كل كلاس بيعمل حاجة واحدة
//وحققنا تاني مبدا اني معدلش في الكلاس لكن اضيف ليه بمعني معدلش في العمليات لكن اضيف عملية جديدة

interface Operation{
    public function calculator($x,$y);
}

class Calculator{
    public function calculator($x,$y,Operation $op){
        return $op->calculator($x,$y);
    }
}
class Add implements Operation{
    public function calculator($x, $y)
    {
        return $x+$y;
    }
}

class Sub implements Operation{
    public function calculator($x, $y)
    {
        return $x-$y;
    }
}
class Mul implements Operation{
    public function calculator($x, $y)
    {
        return $x*$y;
    }
}
class Div implements Operation{
    public function calculator($x, $y)
    {
        return $x/$y;
    }
}

$calc=new Calculator;
echo $calc->calculator(20,4,new Add);


?>