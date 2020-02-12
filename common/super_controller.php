<?php
include 'View.php';
class super_controller
{
	protected $view;
	protected $model;
	protected $model_queryname;
	protected $model_data;

	public function view($viewName,$data=[],$page_title){

		$this->view = new View($viewName,$data,$page_title);//view object
		return $this->view;
	}

	public function model($modelname,$data=[],$queryname){
		$modelname = $modelname.'MODEL';
		//if(file_exists('../model/'.$modelname.'.php')){
			$this->model_queryname = $queryname;
			$this->model_data = $data;
			require '../model/'.$modelname.'.php';
		//	require "/model/'.$modelname.'.php'";
			$this->model = new $modelname;


		//}

	}
}
?>