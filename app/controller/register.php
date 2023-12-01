<?php
class Register extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Seme Framework Introduction!');
    $this->setDescription("Congratulation, you have done well.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $data['hello'] = "this is from controller";

    $this->putJsContent("register/home_modal",$data); //pass data to view
    $this->putThemeContent("register/home",$data); //pass data to view
    $this->putJsContent("register/home_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}
