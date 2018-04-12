<?php

class home extends CI_Controller
{
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		$this->titre_defaut = 'MedFocus';
	}

	public function index()
	{
		$this->homepage();
	}
	
	public function homepage()
	{
        // Chargement des Helpers
        $this->load->helper('url');

		$session_id = $this->session->userdata('session_id');
/*
		// Disconnection
        if ($this->request->getQuery('user') == 'logout') {
			$this->session->sess_destroy();
            /*return $this->redirect([
                'controller' => '',
                'action' => '',
                '?' => ['session' => 'disconnect']
			]);//
			redirect();
        }
        
        if ($this->request->is('post')) {
            //Bouton Se connecter Utilisateur
            if ($this->request->getData('form_type') == 'login_user') {
                return $this->redirect([
                    'controller' => 'UserController',
                    'action' => 'user_login',
                    '?' => ['from' => 'homepage']
                ]);
			}
			//Bouton Se connecter Professionnel
            if ($this->request->getData('form_type') == 'login_pro') {
                return $this->redirect([
                    'controller' => 'ProController',
                    'action' => 'pro_login',
                    '?' => ['from' => 'homepage']
                ]);
            }
            //Bouton Créer un compte Utilisateur
            if ($this->request->getData('form_type') == 'signup_user') {
                return $this->redirect([
                    'controller' => 'UserController',
                    'action' => 'user_signup',
                    '?' => ['from' => 'homepage']
                ]);
			}	
			//Bouton Créer un compte Professionnel
            if ($this->request->getData('form_type') == 'signup_pro') {
                return $this->redirect([
                    'controller' => 'ProController',
                    'action' => 'pro_signup',
                    '?' => ['from' => 'homepage']
                ]);
            }
        }
	*/	
		$this->load->view('home/homepage');
    }
    
    public function about()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/about');
    }
    
    public function contact()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/contact');
    }
    
    public function faq()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/faq');
    }
    
    public function recrutement()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/recrutement');
    }
    
    public function cgu()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/cgu');
	}

    public function search()
	{
		// Chargement de la bibliothèque
        $this->load->library('form_validation');
        $this->load->library('session');        
        
        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        // Chargement du Modèle
		$this->load->model('ProTable');
		
		//	Le formulaire est valide
        if($this->form_validation->run())
        {
            $profession = $this->input->post('spécialité');
            $location = $this->input->post('location');

			if($this->UserTable->check_pwd($email, $password))
			{
				//	On lance une requête
				$results = array();
				$results = $this->UserTable->get_pro_user($email);                
				
			}
			else
			{
				//Pop-up Mauvais Mot de passe
				echo ("pwd");
			}   
		}
		else
		{
			//Pop-up Mauvais Mot de passe
			echo ("exists");               
		}

        $this->load->view('home/search');
	}


	public function otherpage()
	{
		$data = array();
		$data['pseudo'] = 'Arthur';
		$data['email'] = 'email@ndd.fr';
		$data['en_ligne'] = true;
		
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/otherpage', $data, false);
    }
    
}