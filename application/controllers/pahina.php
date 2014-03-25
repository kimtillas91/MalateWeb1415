<?php

class Pahina extends CI_Controller {

	public function view($pahina='about') {
	
		if ( !file_exists('application/views/pahina/'.$pahina.'.php')) {
			show_404();
		}
		
		$data['title'] = ucfirst($pahina); //upper case first letter
		
		$this->load->view('shared/header', $data);
		$this->load->view('shared/global_nav');
		$this->load->view('pahina/'.$pahina, $data);
		$this->load->view('shared/footer');
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/pahina.php */