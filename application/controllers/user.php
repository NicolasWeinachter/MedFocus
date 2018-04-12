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

        $data=array();
        $data['error'] = false;
    
        $this->form_validation->set_rules('email', '"E-mail"', 'trim|required|min_length[7]|max_length[52]|encode_php_tags');
        $this->form_validation->set_rules('pwd',   '"Mot de passe"', 'trim|required|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');

        //	Le formulaire est valide
        if($this->form_validation->run())
        {

            $email = $this->input->post('email');
            $password = $this->input->post('pwd');

            if($this->UserTable->user_exists($email))
            {
                if($this->UserTable->check_pwd($email, $password))
                {
                    //	On lance une requête
                    $query = $this->UserTable->get_info_user($email);
                    $data_user = $query['0'];

                    $newdata = array(
                        'username'  => $data_user['surname'],
                        'email'     => $data_user['email'],
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);                    
                    
                    $this->profile();
                }
                else
                {
                    //Pop-up Mauvais Mot de passe
                    $data['error'] = true;
                    $this->load->view('user/login',$data);                    
                }   
            }
            else
            {
                //Pop-up Mauvais Mot de passe
                $data['error'] = true; 
                $this->load->view('user/login',$data);                          
            }
        }
        else{
        //	Le formulaire est invalide ou vide
        $this->load->view('user/login',$data);
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

            if(!$this->UserTable->user_exists($email))
            {
                $this->UserTable->add_user($email, $password, $name, $surname, $gender, $birth, $phone, $nss);

                $newdata = array(
                    'username'  => $surname,
                    'email'     => $email,
                    'logged_in' => TRUE
                );
                
                $this->session->set_userdata($newdata);
            
                $this->profile();
            }
            else
            {
                // adresse mail déjà utilisée
            }
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
        $this->load->model('ComTable');
        $this->load->model('RdvTable');

        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        //if($this->session->has_userdata('email'))
        //{
            $email = $this->session->userdata('email');
            $query = $this->UserTable->get_info_user($email);
            $data['user'] = $query['0'];

            $query = $this->ComTable->get_user_comments($email);
            //Get doctor info for each comment
            $data['comments'] = $query;

            $query = $this->RdvTable->get_user_rdv($email);
            //Get doctor info for each rdv            
            $data['rdv'] = $query;

            $query = $this->UserTable->raph($email);
            //Get doctor info for each rdv            
            $data['pro'] = $query['0'];

            $this->load->view('user/profile', $data, false);                  
        //}
    }
    


    public function avis()
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
            $this->load->view('user/avis', $data, false);                  
        //}
    }
    


    public function comments()
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
            $this->load->view('user/comments', $data, false);                  
        //}
    }
    


    public function historique_rdv()
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
            $this->load->view('user/historique_rdv', $data, false);                  
        //}
    }
    


    public function liste_medecin()
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
            $this->load->view('user/liste_medecin', $data, false);                  
        //}
    }



    public function rdv()
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
            $this->load->view('user/rdv', $data, false);                  
        //}
    }


    public function profile2()
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
            $this->load->view('user/profile2', $data, false);                  
        //}
    }

}