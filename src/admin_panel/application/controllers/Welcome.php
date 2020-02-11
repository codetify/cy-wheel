<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller 
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "home_v";

		if(!get_active_user()){
				redirect(base_url("login"));
			}
    }

    public function index()
	{
        $this->load->model("wheel_model");

	    $viewData = new stdClass();
        $viewData->wheel = $this->wheel_model->get_all(
            array(
                "isActive"=>1

            ), "id ASC"
        );
        $viewData->viewFolder = $this->viewFolder;
		$this->load->view("{$viewData->viewFolder}/index", $viewData);
		
		
	}
}
