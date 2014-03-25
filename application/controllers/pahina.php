<?php

class Pahina extends CI_Controller {

	public function view($pahina='home') {
	
		if ( !file_exists('applications/views/pahina/'.$pahina.'.php')) {
			show_404();
		}
		
		$data['title'] = ucfirst($pahina); //upper case first letter
		
		$this->load->view('shared/header', $data);
		$this->load->view('shared/global_nav', $data);
		$this->load->view('pahina/'.$pahina, $data);
		$this->load->view('shared/footer', $data);
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/pahina.php */