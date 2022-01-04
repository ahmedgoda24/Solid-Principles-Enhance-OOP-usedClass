<?php
/*
1-
Liskov Sub LSP
مبدا لحل مشاكل الوراثة 
الوراثة بتكون صح لو بتحقق مبدا
is a
وبتنفذ كل فانكشن
*/

/*
2-
// in a class bird Eigle excute LSP beacuse (eigle is a bird ) and (eigle eat and fly)
// but Duck didnot excute LSP (duck is a bird true) but (duck eat and didnot fly) 

class Bird{
    public function eat(){
        echo "Function execute eating";
    }
    public function fly(){
        echo "Function execute flying";

    }
    
}
class Eigle extends Bird{

}
class Duck extends Bird{

}
$duck=new Duck;
$duck->eat();
echo "<br>";
$duck->fly();
//---------------------------------------------------------------------//
*/


/*
3-
*-لحل المشكلة اشوف ايهالحاجة اللي كل الطيور بتعملها واخليها في الكلاس الاساسي وهي الاكل
*- والحاجة اللي مش كل الطيور بتعملها احطها في كلاس تاني زي الطيران واخليه يورث من الاساسي
*/
class Bird{
    public function eat(){
        echo "Function execute eating";
    } 
}
class FlyingBird extends Bird{
    public function fly(){
        echo "Function execute flying";

    }
}
class Eigle extends FlyingBird{

}
class Duck extends Bird{

}




?>