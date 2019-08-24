<?php
	class Home_model extends CI_Model{
		public function getRawData(){
			$raw_data = file_get_contents("http://tuftuf.gambitlabs.fi/feed.txt"); 
			return $raw_data;
		}
	}