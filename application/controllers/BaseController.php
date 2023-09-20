<?php
class BaseController extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function countryList(){
        $this->data['pageName'] = "Country";
        $this->load->view("country/list",$this->data);
    }

    public function editCountry($id){
        $this->data['pageName'] = "Country";
        $this->load->view("country/list",$this->data);
    }

    public function stateList(){
        $this->data['pageName'] = "Country";
        $this->load->view("country/list",$this->data);
    }

    public function cityList(){
        $this->data['pageName'] = "Country";
        $this->load->view("country/list",$this->data);
    }
}
?>