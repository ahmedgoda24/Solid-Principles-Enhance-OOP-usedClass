<?php
require_once("app.php");
    if($request->method()=="POST"){
    $content=$request->postClean("content");
    echo $content;
    }
?>