<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class View_page extends MY_Controller {
    public $class_name;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        // $this->load->model('master_model');
    }

   
    public function index($slug) {
       
         $template_path = $this->pagewisecontent($slug);
        $data = $this->data;
        // $data['view_path'] = "custom/$slug"; 
        $data['page_heading'] = $data['page_items']->page_title;
        $data['view'] = "view_page/".$slug;
        $data['scripts'] = array("assets/javascripts/$slug.js");
        $this->load->view($template_path, $data);
    }
}