<?php
	class Pages extends CI_Controller{
		
		public function view($page = 'home')
		{
	        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
	                // Error page if it doesn't exist
	                show_404();
	        }

	        $data['title'] = ucfirst($page); // Capitalize the first letter
	         
	        $raw_data = $this->home_model->getRawData();
	        $data['raw_data'] = $raw_data;
	        
	        $converted_data = $this->home_model->convertData($raw_data);

	        $this->load->helper('url');
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);
		}
	}

?>