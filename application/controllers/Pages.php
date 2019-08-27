<?php
	//Controller to choose page to show and send data
	class Pages extends CI_Controller{
		
		public function view($page = 'home')
		{
	        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	        {
	                // Error page if it doesn't exist
	                show_404();
	        }

	        $data['title'] = $page;
	         
	        //Gets data from website
	        $rawData = $this->home_model->getRawData();
	        $data['rawData'] = $rawData;
	        
	        //Converts data
	        $convertedData = $this->home_model->convertData($rawData);
	        $data['convertedData'] = $convertedData;

	        //Gets the date of the data
	        $date = $this->home_model->getDate($rawData);
	        $data['date'] = $date;

	        $this->load->helper('url');
	        $this->load->view('templates/header', $data);
	        $this->load->view('pages/'.$page, $data);
	        $this->load->view('templates/footer', $data);
		}
	}

?>