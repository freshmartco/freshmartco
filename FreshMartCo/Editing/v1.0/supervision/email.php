<?php

$email="teADst@geemail.coa";

if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email))
 {
    echo  "failed";
 }else
 {
	 echo  "succes";
 }
   
?>