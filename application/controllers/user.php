<?php

class user extends CI_Controller
{
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
    }
    
    public function index()
	{
		$this->login();
    }
    

	
	public function login()
	{
		// Chargement de la bibliothèque
        $this->load->library('form_validation');
        $this->load->library('session');        
        
        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        // Chargement du Modèle
        $this->load->model('UserTable');
    
        $this->form_validation->set_rules('email', '"E-mail"', 'trim|required|min_length[7]|max_length[52]|encode_php_tags');
        $this->form_validation->set_rules('pwd',   '"Mot de passe"', 'trim|required|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');

        //	Le formulaire est valide
        if($this->form_validation->run())
        {
            //	On lance une requête
            $data = array();
            $data['user_info'] = $this->UserTable->get_info_user(1);
        
            $this->load->view('user/profile', $data);
        }
        //	Le formulaire est invalide ou vide
        else 
        {
            $this->load->view('user/login');
        }
    }
    


	public function signup()
	{
        // Chargement des bibliothèques
        $this->load->library('form_validation');
        $this->load->library('session');

        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        // Chargement du Modèle
        $this->load->model('UserTable');

        $this->form_validation->set_rules('inputName', '"Nom"', 'trim|required|min_length[2]|max_length[45]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputSurname',   '"Prénom"', 'trim|required|min_length[2]|max_length[45]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputBirth', '"Date de naissance"', 'trim|required|min_length[8]|max_length[10]|encode_php_tags');
        $this->form_validation->set_rules('inputPhone',   '"Phone"', 'trim|required|min_length[10]|max_length[12]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputEmail', '"Email"', 'trim|required|min_length[7]|max_length[52]|encode_php_tags');
        $this->form_validation->set_rules('inputPassword',   '"Mot de passe"', 'trim|required|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputPassword2', '"Mot de passe 2"', 'trim|required|matches[inputPassword]|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');

        //	Le formulaire est valide
        if($this->form_validation->run())
        {            
            $name = $this->input->post('inputName');
            $surname = $this->input->post('inputSurname');
            $birth = $this->input->post('inputBirth');
            $phone = $this->input->post('inputPhone');
            $email = $this->input->post('inputEmail');
            $password = $this->input->post('inputPassword2');

            $gender = "Male";
            $nss = "1blabla";

            $this->UserTable->add_user($email, $password, $name, $surname, $gender, $birth, $phone, $nss);

            $newdata = array(
                'username'  => $surname,
                'email'     => $email,
                'logged_in' => TRUE
            );
            
            $this->session->set_userdata($newdata);
        
            $this->profile();
        }
        //	Le formulaire est invalide ou vide
        else 
        {
            $this->load->view('user/signup');
        }
    }
    
    public function profile()
	{
        // Chargement des bibliothèques
        $this->load->library('session');

        // Chargement du Modèle
        $this->load->model('UserTable');

        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        //if($this->session->has_userdata('email'))
        //{
            $email = $this->session->userdata('email');
            $data['user_info'] = $this->UserTable->get_info_user($email); 
            $this->load->view('user/profile', $data, false);                  
        //}
	}
}