<?php
/*
//1-
Interface Segration Principle ISP
“Clients should not be forced to depend upon interfaces that they do not use“.
//مجبرش الكلاس انو يستخدم ميسود موجودة في انتيرفاس هو مش هيحتاجها

The goal of this principle is to reduce the side effects of using larger interfaces
by breaking application interfaces into smaller ones.
It's similar to the Single Responsibility Principle,
 where each class or interface serves a single purpose.
*/

/*
//2-
interface Printer{
    public function print();
    public function scan();
}
class PrinterHb implements Printer{
    public function print(){

    }
    public function scan(){

    }

}
class Prrinteronly implements Printer{
    //كلاس دا عايز يطبع بس مش عايز يعمل اسكان فانا اجبرته انه يعمل سكان برضو وكدا خالفنا الشروط
    public function print(){

    }
    public function scan(){

    }

}
*/


//3- to solve this problem make two interface 
interface Printer{
    public function print();
    
}
interface scanner{
    public function scan();

}
class PrinterHb implements Printer,scanner{
    public function print(){

    }
    public function scan(){

    }

}
class Prrinteronly implements Printer{
    public function print()
    {
        
    }
}



?>