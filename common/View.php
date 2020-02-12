<?php

class View
{
	protected $view_file;
	protected $view_data;
	protected $page_title;

	public function __construct($view_file,$view_data,$page_title){
		$this->view_file = $view_file;
		$this->view_data = $view_data;
		$this->page_title= $page_title;
	}

	public function render()
	{
	//	if(file_exists('/view/'.$viewfile.'.php')){
		include '../view/'.$this->view_file.'.php';
			//include '/view/'.$viewfile.'.php';
	//	}
	}

 public function getAction(){
        return ($this->view_file);
    }
    
    public function getPageTitle(){
        echo $this->page_title;
        return $this->page_title;
    }

    public function getData(){
       // echo $this->view_data;
       // echo 'i might be empty';
        return $this->view_data;
    }
}
?>