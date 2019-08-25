<?php
	class Home_model extends CI_Model{
		
		public function getRawData(){

			//Gets data from url
			$raw_text = file_get_contents("http://tuftuf.gambitlabs.fi/feed.txt"); 
			//$raw_data_lines = new array();
			//Extracts each line of the text and puts them in an array
			$raw_data = explode("\n", $raw_text);

			//Eliminates register number from the lines to get only the values (skips line 1 as it's the date of the record)
			for($i = 1; $i < count($raw_data); $i++){
				//line[0] contains register number and line[1] contains value
				$line = explode(":", $raw_data[$i]);
				if ( ! isset($line[1])) {
				   $line[1] = null;
				}
				$raw_data[$i] = $line[1];
			}


			return $raw_data;
		}

		



	}