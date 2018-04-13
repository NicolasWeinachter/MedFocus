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
                        'type'      => "user",
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

        $data=array();
        $data['error'] = false;

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

            $gender = "Homme";
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
                $data['error'] = true;                
                $this->load->view('user/signup', $data);
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
        $this->load->model('ProTable');

        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        //if($this->session->has_userdata('email'))
        //{
            $email = $this->session->userdata('email');
            $query = $this->UserTable->get_info_user($email);
            if($query) :
                $data['user'] = $query['0'];
			endif;

            //Get all comments
            $query = $this->ComTable->get_user_comments($email);
            $data['comments'] = $query;
            //Get user info for each comment            
            $data['pro_comments'] = array();
            foreach ($data['comments'] as $myComments) :
                $query = $this->ProTable->get_info_pro($myComments['email_pro']); 
                $data['pro_comments'] = $query;
            endforeach;

            //Merge arrays
            $nbrComments = count($data['comments']);
            for($i=0;$i<$nbrComments;$i++) {
                $data['proComments'][$i] = array_merge($data['comments'][$i], $data['pro_comments'][$i]);
            }

            //Get all rdv
            $query = $this->RdvTable->get_user_rdv($email);
            $data['rdv'] = $query;
            //Get pro info for each rdv            
            $data['pro_rdv'] = array();
            foreach ($data['rdv'] as $myRdv) :
                $query = $this->ProTable->get_info_pro($myComments['email_pro']); 
                $data['pro_rdv'] = $query;
            endforeach;

            //Merge arrays
            $nbrRdv = count($data['rdv']);
            for($i=0;$i<$nbrRdv;$i++) {
                $data['proRdv'][$i] = array_merge($data['rdv'][$i], $data['pro_rdv'][$i]);
            }

            $this->load->view('user/profile', $data, false);                  
        //}
    }

    public function avis()
    {
        // Chargement des bibliothèques
        $this->load->library('session');

        // Chargement du Modèle
        $this->load->model('ProTable');

        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        //if($this->session->has_userdata('email'))
        //{
            $email = $this->session->userdata('email');
            $data['pro_info'] = $this->ProTable->get_info_pro($email); 
            $this->load->view('user/avis', $data, false);                  
        //}
    }
    
}