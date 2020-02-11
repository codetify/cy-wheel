<?php

class Wheel extends BP_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "wheel_v";
        $this->load->model("wheel_model");
		if(!get_active_user()){
				redirect(base_url("login"));
			}

    }

    public function index(){
				if(!isAllowedViewModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
        $viewData = new stdClass();
		
        $items = $this->wheel_model->get_all(
            array(), "id ASC"
        );

		
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){
			if(!isAllowedWriteModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
        $viewData = new stdClass();
		
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function save(){
		if(!isAllowedWriteModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
		
       $this->load->library("form_validation");

		$this->form_validation->set_rules("title", "Karar Adı", "required|trim|is_unique[wheel.id]");
   		$this->form_validation->set_rules("color", "Çark Rengi", "required|trim");


        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır",
				"is_unique"   => "<b>{field}</b> kayıtlarda mevcuttur."
            )
        );

        $validate = $this->form_validation->run();
        if($validate){

            $insert = $this->wheel_model->add(
                array(
					"title"     	=> $this->input->post("title"),
					"color"  	=> $this->input->post("color"),
                    "isActive"     	 	=> 1,
                    "createdAt"     	=> date("Y-m-d H:i:s")
                )
            );

            if($insert){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("wheel"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
    }
	public function update_form($id){
		if(!isAllowedUpdateModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
        $viewData = new stdClass();
	
        $item = $this->wheel_model->get(
            array(
                "id"    => $id,
            )
        );
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;
       
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){
		
		if(!isAllowedUpdateModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
		
        $this->load->library("form_validation");

		$this->form_validation->set_rules("title", "Karar Adı", "required|trim");
   		$this->form_validation->set_rules("color", "Çark Rengi", "required|trim");


        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır",

            )
        );
        $validate = $this->form_validation->run();
        if($validate){
            $update = $this->wheel_model->update(
                array("id" => $id),
                array(
                    "title"      => $this->input->post("title"),
                    "color"          => $this->input->post("color"),
                   
                )
            );
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("wheel"));

        } else {

            $viewData = new stdClass();
		
        
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            $viewData->item = $this->wheel_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id){
        if(!isAllowedDeleteModule())	{
            redirect(base_url($this->router->fetch_class()));
		}
        $delete = $this->wheel_model->delete(
            array(
                "id"    => $id
            )
        );
        if($delete){

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde silindi",
                "type"  => "success"
            );

        } else {

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("wheel"));

    }

    public function isActive($id){
			if(!isAllowedUpdateModule())	{
            redirect(base_url($this->router->fetch_class()));
				}
        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->wheel_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

    

}
