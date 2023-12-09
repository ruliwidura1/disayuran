<?php
class Tujuanpengiriman extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Disayuran');
    $this->setDescription("Congratulation, you have done well.");
    $this->setKeyword('Disayuran');
    $this->setAuthor('Disayuran');

    $data['hello'] = "this is from controller";

    $this->putThemeContent("tujuanpengiriman/home",$data); //pass data to view
    $this->putJsContent("tujuanpengiriman/home_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}
