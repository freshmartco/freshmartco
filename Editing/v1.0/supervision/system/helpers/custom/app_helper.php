<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
  
function debug($ele = array()) {
	$CI =& get_instance();
    echo '<pre>';
    print_r($ele);
    $data=debug_backtrace();
    echo '<br>File Name => '.$data[0]['file'];
    echo '<br>Line No => '.$data[0]['line'];
}

 

