<?php


        
require_once("core/Request.php");
require_once("core/Session.php");
require_once("core/Database/Mysql.php");
require_once("core/Cart.php");


use Route\core\Request;
use Route\core\Session;
use Route\core\Database\Mysql;
use Route\core\Cart;

$request=new Request;
$session=new Session();
$mysql=new Mysql("localhost","root","","route35exp");
$cart=new Cart;



?>