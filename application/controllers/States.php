<?php
class States extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->data['pageName'] = "states";
    }

    public function index(){
        $this->load->view("states/list",$this->data);
    }
}
?>