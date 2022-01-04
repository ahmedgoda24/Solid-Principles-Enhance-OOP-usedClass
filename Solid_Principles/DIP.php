<?php

/*
1-
Depency Inversion Principle DIP
اعتمادا عل المثال اللي تحت كدا خطأ المفروض اديبينس كل عملية في الكلاس بتاعها 
وانا اتعامل مع انتيرفاس  بيجمعهم كلهم
*/


/*
2-
//   thas is wrong كدا الاوردر بيعمل ميثود لكل كلاس جواه وهو اللي بيتعامل معاهم
class Order{

    public function payWithVisa(Visa $visa){
        echo "pay with visa";
    }
    public function payWithPaybal(Paybal $paybal){
        echo "pay with baybal";
    }
    public function payWithCash(Cash $cash){
        echo "pay with cash";
    }

}
class Visa{

}
class Paybal{

}
class Cash{

}
$order=new Order;
$order->payWithVisa(new Visa);
echo "<br>";
$order->payWithCash(new Cash);
echo "<br>";
$order->payWithPaybal(new Paybal);
*/

//3-الصح اني اعمل كل ميثود داخل الكلاس بتاعها واعمل انتيرفاس يجمعهم كلهم وبعدين الاورد يتعامل مع الانترفاس


interface PaymentMethod
{
    public function pay();
}
class Order{
    public function finishpayment(PaymentMethod $method){
       echo $method->pay();
    }

}
class Visa implements PaymentMethod {
    public function pay(){
        echo "pay with vis";
    }
}

class Paybal implements PaymentMethod {
    public function pay(){
        echo "pay with paybal";
    }
}
class Cash implements PaymentMethod {
    public function pay(){
        echo "pay with cash";
    }
}

$order =new Order;
$order->finishpayment(new Visa);
echo "<br>";
$order->finishpayment(new Paybal);
echo "<br>";
$order->finishpayment(new Cash);

?>
