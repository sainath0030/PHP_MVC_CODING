
<?php

$error = false;
$result = false;
$data = array();

function getThePostedValues(){

	$postedValues = array();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    foreach($_POST as $key => $value){
	    	if($value != ''){
	    		$postedValues[$key] = strtoupper($value);
	    	}
	    	
	    }

	  }

  return $postedValues;
}

function criticalThinker($postedValues){
		
	$result = null;

	$trainingData = array(
		'A' 		=> 1,
		'B' 		=> 2,
		'C'			=> 3,
		'D'			=> 4,
		'E'			=> 5
	);

	if(isset($postedValues['winner'])){

		$result = $postedValues['winner'];
	
	}else{
		
		foreach($postedValues as $postedValue){

			if(isset($trainingData[$postedValue])){

				if($result === null){

					$result = $postedValue;

				}else{

					if($trainingData[$postedValue] < $trainingData[$result] ){
						$result = $postedValue;
					}

				}

			}

		}

	}

	return $result;
}

$postedValues = getThePostedValues();

//var_dump($_POST);

if(count($postedValues) > 0 && $postedValues != null){

	$result = criticalThinker($postedValues);

}else{
	$error = "Please fill in the above with a value from A to E";
}

if($result === null){
	$error = "Please fill in the above with a value from A to E";
}


$data = array(
    'error'		=> $error,
    'result'	=> $result
);

echo json_encode($data);

?>




