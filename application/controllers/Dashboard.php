<?php

class Dashboard extends CI_Controller{
 
    function __construct() {
        parent::__construct();
        
        if ($this->session->userdata('logged')<>1){
            $this->alert->set('alert-danger', 'Login First');
            redirect(site_url(auth));
        }
        $this->load->model('dashboard_model');

    }
    
    
    public function index(){
       
        $sess_data = $this->session->userdata();
        $rows = $this->Grade_model->getAll()->result();

		$data = array(
			'title' => 'Grade',
			'content' => 'Data List',
			'rows' => $rows,
			'sidebar' => 'sidebar-tad'
			);

			//ini adalah controller user
               $this->load->view('/headfoot/header',$data);
				$this->load->view('/TAD/Grade/index',$data);
               $this->load->view('/headfoot/footer');
       
    }



}