<?php
    require_once("app.php");

   $session->set("islogin","true");
   echo $session->get("islogin");
   $session->remove("islogin");
   echo $session->get("islogin");


  $customers= $mysql->select("SELECT * FROM customers LIMIT 2");
   echo"<pre>";
   print_r($customers);
   echo"</pre>";


   $cart->add("lab",3);
   $cart->add("mobile",5);
   $cart->read();


?>