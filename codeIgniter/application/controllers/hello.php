<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hello extends CI_Controller {
  function sayHello(){
    echo 'hello word';
  }
  function show(){
    $this->load->view('textview.php');
  }
}
