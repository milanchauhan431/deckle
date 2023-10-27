<?php
class Cities extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->data['pageName'] = "cities";
    }

    public function index(){
        $this->load->view("cities/list",$this->data);
    }
}
?>