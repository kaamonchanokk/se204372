<?php
$controllers = array('mainnisit'=>['home', 'error'],
					 'intrequest'=>['newintrequest','home','addintrequest'],
					 'statusrequest'=>['index','detail'],
					 'intpresent'=>['newintpresent','home','addintpresent'],
					 'statuspresent'=>['index'],
					 'document'=>['index'],
					 'login'=>['index'],
					'test'=>['home1','home2','addpic'],
					'documentfornisit'=>['index']); 

function call($controller, $action){
	//echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "mainnisit":	$controller = new MainnisitController();
							break;
		case "intrequest":	$controller = new IntrequestController();
							require_once("models/intrequestModel.php");
							require_once("models/studentModel.php");
							require_once("models/workplaceModel.php");
							require_once("models/yearModel.php");
							break;
		case "statusrequest":	$controller = new StatusrequestController();
							require_once("models/intrequestModel.php");
							require_once("models/documentfornisitModel.php");
							//require_once("models/documentModel.php");
							break;
		case "intpresent":	$controller = new IntpresentController();
							require_once("models/intpresentModel.php");
							require_once("models/yearModel.php");
							require_once("models/workplaceModel.php");
							require_once("models/studentModel.php");
							break;
		case "statuspresent":	$controller = new StatuspresentController();
							require_once("models/intpresentModel.php");
							//require_once("models/intrequestModel.php");
							break;
		case "document":	$controller = new DocumentController();
							require_once("models/documentModel.php");
							break;
		case "login":		$controller = new LoginController();
							//require_once("models/documentModel.php");
							break;						
		case "test":	$controller = new TestController();
						require_once("models/testModel.php");
							break;
		case "documentfornisit":		$controller = new DocumentfornisitController();
							require_once("models/documentfornisitModel.php");
							//require_once("models/documentModel.php");
							break;	
                        
	}
	$controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{	if(in_array($action, $controllers [$controller]))
	{	call($controller, $action); }
	else
	{	call('pages', 'error'); }

}
else
{	call('pages', 'error');} 
?>