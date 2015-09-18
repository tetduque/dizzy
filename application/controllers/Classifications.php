<?php
class Classifications extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('classifications_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['classifications'] = $this->classifications_model->get_classifications();
				$data['title'] = 'Classifications';
				
				echo $this->load->view('admin/classifications/view', $data);
        }

        public function view($id)
        {
                $data['classifications_item'] = $this->classifications_model->get_classifications($id);
        }
}


