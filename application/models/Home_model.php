<?php
	class Home_model extends CI_Model{
		
		//Gets data from URL and returns lines of text in array
		public function getRawData(){

			//Gets data from url
			$rawText = file_get_contents("http://tuftuf.gambitlabs.fi/feed.txt"); 
			
			//Extracts each line of the text and puts them in an array
			$rawData = explode("\n", $rawText);

			//Eliminates register number from the lines to get only the values 
			//(skips line 1 as it's the date of the record)
			for($i = 1; $i < count($rawData); $i++){
				//line[0] contains register number and line[1] contains value
				$line = explode(":", $rawData[$i]);
				if ( ! isset($line[1])) {
				   $line[1] = null;
				}
				$rawData[$i] = $line[1];
			}


			return $rawData;
		}

		//Gets the date of the record
		public function getDate($rawData){
			return $rawData[0];
		}

		//Auxiliary function to convert line 92 - Signal quality
		public function convertInteger($rawElement){
			
			//Convert to binary
			$binary = decbin($rawElement);
			//Takes last 8 bits
			$binaryLow = substr($binary, -8);  
			//Converts back to decimal
			$integerElement = bindec($binaryLow);

			return $integerElement;
		}

		//Auxiliary function to convert real4 with the equation 
		//(-1)^sign*(1+mant)*2^exp
		public function convertReal($rawElement1, $rawElement2){

			//Check which one is most significant word
			if((int)$rawElement1 > (int)$rawElement2){
				$highWord = $rawElement1;
				$lowWord = $rawElement2;
			}else{
				$highWord = $rawElement2;
				$lowWord = $rawElement1;
			}

			//Convert to binary
			$binaryHighWord = decbin($highWord);
		
			$binaryLowWord = decbin($lowWord);

			//If binary numbers have less than 16 bit, complete with 0s on the left
			while(strlen($binaryHighWord) < 16){
				$binaryHighWord = "0" . $binaryHighWord;
			}

			while(strlen($binaryLowWord) < 16) {
				$binaryLowWord = "0" . $binaryLowWord;
			}

			//Join them to make 32 bit, high word first
			$binaryWord = $binaryHighWord . $binaryLowWord;

			//The sign is the first bit
			$sign = substr($binaryWord, 0, 1);

			//The exponent is next 8 bits
			$exp = substr($binaryWord, 1, 8);
			$exp = bindec($exp);
			//Exponent bias is 127
			$exp = $exp - 127;

			//The mantissa is the rest, 23 bits
			$mant = substr($binaryWord, 9, 23);
			$mant = bindec($mant);
			

			//Check if there's exponent or not to do adjustment
			if(($exp + 127) > 0){
				//Divide by 80 00 00 in hex and add 1
				$mant = ($mant / 8388608) + 1; 
			}else{
				//Divide by 40 00 00 hex 
				$mant = $mant / 4194304; 
			}

			//Create the equation
			$convertedElement = pow(-1, $sign) * ($mant) * pow(2, $exp);


			return $convertedElement;
		}

		//Main function to convert data to readable for humans
		public function convertData($rawArray){

			//The array of converted data will be smaller than the raw data array
			$convertedArray = [];

			//Convert first 48 registers, skip date on index 0
			for($i = 1; $i <= 48; $i++) {
				//If index is odd (means it's the start of the pair of numbers)
				if($i % 2 != 0 ){
					
					//Convert pair long numbers (there's 6)
					if(($i == 9)|($i == 13)|($i == 17)|($i == 21)|($i == 25)|($i == 29)){ 
						
						$substraction = (int)$rawArray[$i] - (int)$rawArray[$i+1];
						array_push($convertedArray, $substraction);

					//Convert pair real4 numbers (there's 18)
					}else{ 
						
						$real4 = $this->convertReal($rawArray[$i], $rawArray[$i+1]);
						array_push($convertedArray, $real4);
					}

				}
			}

			//Convert the signal quality on index 92
			$signalInt = $this->convertInteger($rawArray[92]);
			array_push($convertedArray, $signalInt);


			return $convertedArray;

		}



	}