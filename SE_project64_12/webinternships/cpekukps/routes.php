<?php
$controllers = array('main'=>['home'],
					 'news'=>['home', 'error'],
					 'workplace'=>['index','search'],
					 'document'=>['index','search'],
					 'login'=>['index','getlogin'],
					'test'=>['home1','home2','addpic']); 

function call($controller, $action){
	//echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "main":	$controller = new MainController();
						break;
		case "news":	$controller = new NewsController();
						require_once("models/newsModel.php");
						break;
		case "workplace":	$controller = new WorkplaceController();
							require_once("models/workplaceModel.php");
							break;
		case "document":	$controller = new DocumentController();
							require_once("models/documentModel.php");
							break;
		case "login":		$controller = new LoginController();
							require_once("models/loginModel.php");
							require_once("models/logintModel.php");
							break;						
		case "test":	$controller = new TestController();
						require_once("models/testModel.php");
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