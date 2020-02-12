<?php
class Routes
{
	protected $controller='logincontroller';
	protected $action='index';
	protected $prams=[];

	public function __construct()
	{
		$this->prepareURL();
		//echo $this->controller;
		//echo $this->action;
		

		//if(file exists(controller.$this->controller.'.php'))
		//{	

			require '../controller/'.$this->controller.'.php';

			$this->controller = new $this->controller;
			if(method_exists($this->controller,$this->action)){
				call_user_func([$this->controller,$this->action],$this->prams);
			}
		//}
	}
	protected function prepareURL(){
		$request=trim($_SERVER['REQUEST_URI'],'/');
		if(!empty($request))
		{
			$uri=explode('/', $request);
			$this->controller=isset($uri[0])?$uri[0].'controller':'loginController';
			$this->action=isset($uri[1])?$uri[1]:'index';
			unset($uri[0],$uri[1]);
			$this->prams=!empty($uri)?array_values($uri):[];
		}
	}
}