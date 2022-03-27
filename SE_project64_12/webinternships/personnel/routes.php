<?php
$controllers = array('main'=>['home', 'error'],
					 'workplace'=>['index','updateForm','update','delete','newworkplace','add'],
					 'requestforteacher'=>['index','detail','updatestatus','updatestatusofdetail','search','selectsort'],
					 'documentfornisit'=>['index','newdocumentfornisit','adddocumentfornisit','delete'],
					 'presentforteacher'=>['index','updatestatus','search','selectsort'],
					 'news'=>['index','updateForm','update','delete','newnews','addnews'],
					 'document'=>['index','updateForm','update','delete','newdocument','adddocument']
					); 

function call($controller, $action){
	//echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "main":	$controller = new MainController();
							break;
		case "workplace":	$controller = new WorkplaceController();
							require_once("models/workplaceModel.php");
							break;
		case "requestforteacher":	$controller = new RequestforteacherController();
							require_once("models/yearModel.php");
							require_once("models/requestforteacherModel.php");
							break;
		case "documentfornisit":	$controller = new DocumentfornisitController();
							require_once("models/documentfornisitModel.php");
							require_once("models/studentModel.php");
							break;
		case "presentforteacher":	$controller = new PresentforteacherController();
						    require_once("models/yearModel.php");
							require_once("models/presentforteacherModel.php");
							break;
		case "news":	$controller = new NewsController();
							require_once("models/newsModel.php");
							break;
		case "document":	$controller = new DocumentController();
							require_once("models/documentModel.php");
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