<?php

class Settings extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "settings_v";

        $this->load->model("settings_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){
		if(isAdmin())	{
			 $viewData = new stdClass();

        $item = $this->settings_model->get();

        if($item)
            $viewData->subViewFolder = "update";
        else
            $viewData->subViewFolder = "no_content";

        $viewData->viewFolder = $this->viewFolder;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
			
		}
			else{
				redirect(base_url());
				}
    }

    public function new_form(){
		if(!isAdmin())	{
			redirect(base_url());
		}
        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function save(){
		if(!isAdmin())	{
			redirect(base_url());
		}

        $this->load->library("form_validation");

        if($_FILES["logo"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Masaüstü Logo için lütfen bir görsel seçiniz",
                "type"  => "error"
            );
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings/new_form"));

            die();
        }
		 if($_FILES["home_img_url"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Ana Sayfa resmi için lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings/new_form"));

            die();
        }

        
        if($_FILES["favicon"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Favicon için lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings/new_form"));

            die();
        }


        $this->form_validation->set_rules("company_name", "Şirket Adı", "required|trim");
	    $this->form_validation->set_rules("slogan", "Şirket Sloganı", "required|trim");
        $this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){


            $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
            $image_150x100 = upload_picture($_FILES["logo"]["tmp_name"], "uploads/$this->viewFolder",150,100, $file_name);
            $image_32x32  = upload_picture($_FILES["favicon"]["tmp_name"], "uploads/$this->viewFolder",32,32, $file_name);
            if($image_150x100 && $image_32x32 ){

                $uploaded_file = $this->upload->data("file_name");

                $insert = $this->settings_model->add(
                    array(
                        "company_name"  => $this->input->post("company_name"),
						"slogan"  => $this->input->post("slogan"),
                        "phone_1"       => $this->input->post("phone_1"),
                        "fax_1"         => $this->input->post("fax_1"),
                        "address"       => $this->input->post("address"),
                        "about_us"      => $this->input->post("about_us"),
                        "mission"       => $this->input->post("mission"),
                        "vision"        => $this->input->post("vision"),
                        "email"         => $this->input->post("email"),
                        "facebook"      => $this->input->post("facebook"),
                        "twitter"       => $this->input->post("twitter"),
                        "instagram"     => $this->input->post("instagram"),
                        "linkedin"      => $this->input->post("linkedin"),
                        "logo"          => $file_name,
                        "favicon"       => $file_name,
                        "createdAt"     => date("Y-m-d H:i:s")
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

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenirken bir problem oluştu",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("settings/new_form"));

                die();

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update_form($id){
		if(!isAdmin())	{
			redirect(base_url());
		}
        $viewData = new stdClass();

        $item = $this->settings_model->get(
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
		if(!isAdmin())	{
			redirect(base_url());
		}
        $this->load->library("form_validation");


        $this->form_validation->set_rules("company_name", "Şirket Adı", "required|trim");
        $this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){
            $data = array(
                 "company_name"  => $this->input->post("company_name"),
					"slogan" 		=> $this->input->post("slogan"),
                    "phone_1"       => $this->input->post("phone_1"),
                    "fax_1"         => $this->input->post("fax_1"),
                    "address"       => $this->input->post("address"),
                    "about_us"      => $this->input->post("about_us"),
                    "mission"       => $this->input->post("mission"),
                    "vision"        => $this->input->post("vision"),
                    "email"         => $this->input->post("email"),
                    "facebook"      => $this->input->post("facebook"),
                    "twitter"       => $this->input->post("twitter"),
                    "instagram"     => $this->input->post("instagram"),
                    "linkedin"      => $this->input->post("linkedin"),
                    "updateAt"     => date("Y-m-d H:i:s")
            );

            if($_FILES["logo"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);

                $image_150x100 = upload_picture($_FILES["logo"]["tmp_name"], "uploads/$this->viewFolder",150,100, $file_name);

                if($image_150x100){

                    $data["logo"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Masaüstü görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("settings/update_form/$id"));

                    die();

                }

            }
			
            if($_FILES["favicon"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["favicon"]["name"], PATHINFO_EXTENSION);

                $image_32x32 = upload_picture($_FILES["favicon"]["tmp_name"], "uploads/$this->viewFolder",32,32, $file_name);

                if($image_32x32){

                    $data["favicon"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Favicon görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("settings/update_form/$id"));

                    die();

                }

            }


            $update = $this->settings_model->update(array("id" => $id), $data);

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



            $settings = $this->settings_model->get();
            $this->session->set_userdata("settings", $settings);

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            $viewData->item = $this->settings_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }
  
}
