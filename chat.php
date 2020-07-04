<?php
$method=$_SERVER['REQUEST_METHOD']
if($method=="POST"){

$requestBody=file_get_contents('php://input');
$json=json_decode($requestBody);

$text=4json->result->parameters->text;

swithc($text){

	case 'hi':
	$speech="his this is";
	break;
	
	case 'bye':
	$speech="by for now";
	break;
	
	case 'anything':
	$speech="can you type anytho";
	break;
	
	default:
	$speech="sorry";
	break;

}

	$response= new \stdClass();
	$response->speech="";
	$response->displayText="";
	$response->source="webhook";
	echo json_encode($response);
	}else{
	
		echo "method not allowd";
		
	}

?>