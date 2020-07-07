<?php
class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    if(!this->isauthorised(){ return redirect 'home';})
  }
}
?>
