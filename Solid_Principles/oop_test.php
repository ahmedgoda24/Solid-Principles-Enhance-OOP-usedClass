<?php
require_once("driver.php");
class BusSpeed{
    public $distance;
    public $time;
    public $driver;
    public function __construct(Driver $driver)
    {
        $driver->info();
        
    }
    public function calcSpeed(int $t,int $d)
    {
        echo $this->time=$t *$this->distance=$d ;
    }
    
}
$bus=new BusSpeed(new Driver);
echo "<br>";
$bus->calcSpeed(30,5);
?>