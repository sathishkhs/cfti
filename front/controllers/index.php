<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Index extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('index_model');
        $this->load->model('pages_model');
    }
    public function index($slug = 'home') {
        $data = $this->data;
        $this->pages_model->primary_key = array('page_slug' => $slug);
        $data['page_items'] = $this->pages_model->get_row('pages');
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/home', $data);
    }
}
?>