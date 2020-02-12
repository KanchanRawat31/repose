<?php
require 'settingController.php';
class campaignController extends super_controller
{
    protected $setting;
    public function showCampaign()
    {   
        $this->model('campaign',[],'showCampaign');
        $can_access=call_user_func_array([$this->model,$this->model_queryname],$this->model_data);
        $this->view('/dashboard/showCampaign',[],'Show Campaign');
        $this->view->render();
    }
    public function launchCampaign()
    {
        $this->view('/dashboard/launchCampaign',[],'');
        $this->view->render();
    }
    //public function testCampaign(){
        //$this->model('');
    //}
    public function launch(){
        echo '<br>I am inside launch function of campaign controller<br>';
        $this->setting = new settingController();
        //if($this->setting->gmail){ this needs to be executed
        if(true){
            echo '<br>calling gmailSmtp<br>';
            $this->setting->gmailSmtp();
            $this->launchCampaign();
        }
    }
}
?>