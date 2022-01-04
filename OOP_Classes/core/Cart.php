<?php
namespace Route\core;

class Cart{
    private $items=[];
    public function add(string $productName,int $quantitiy)
    {
        $this->items[$productName]=$quantitiy;
    }
    public function read()
    {
        foreach ($this->items as $productName => $quantitiy) {
            echo "$productName:$quantitiy <br>";
        }
    }
    public function empty()
    {
            $this->items=[];    
    }
}


?>