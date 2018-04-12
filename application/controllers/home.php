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
		
		// Chargement de la bibliothèque
        $this->load->library('form_validation');
        $this->load->library('session');        
        
        // Profiler for debug
        $this->output->enable_profiler(TRUE);

        // Chargement du Modèle
        $this->load->model('ProTable');

		$session_id = $this->session->userdata('session_id');

        $data=array();
		$data['error'] = false;
		$data['criterias']=array();
		$data['results']=array();
    
        $this->form_validation->set_rules('what', '""', 'trim|required|max_length[52]|encode_php_tags');
        $this->form_validation->set_rules('where', '""', 'trim|max_length[52]|encode_php_tags');

        //	Le formulaire est valide
        if($this->form_validation->run())
        {
			$data['criterias']['what'] = $this->input->post('what');
			$data['criterias']['where'] = $this->input->post('where');

			$data['results'] = $this->ProTable->get_pros_basic_search($data['criterias']['what'], $data['criterias']['where']);
			
			//$this->search();
			$this->search($data);
			
        }
		else
		{
			//	Le formulaire est invalide ou vide
			$this->load->view('home/homepage',$data);
        }
    }
    
    

    public function search($data)
	{
		// Chargement de la bibliothèque
        $this->load->library('form_validation');
		$this->load->library('session');  
		
		// Chargement du Modèle
		$this->load->model('ProTable');
        
        // Profiler for debug
		$this->output->enable_profiler(TRUE);
		        

		//	Le formulaire est valide
        if($this->form_validation->run())
        {
            $profession = $this->input->post('spécialité');
            $location = $this->input->post('location');

			//Autres critères
			
			//Speciality searched
			$query = $this->ProTable->get_speciality_basic_search($data['criterias']['what'], $data['criterias']['where']);
			if($query) :
				$data['speciality'] = $query[0]['speciality'];
			else :
				$data['speciality'] = "";
			endif;

			//Speciality search
			$data['lumiere'] = $this->ProTable->get_lumiere_speciality_search($data['speciality']);

			//Find pros
			
			//	Le formulaire est invalide ou vide
			$this->load->view('home/search', $data);
		}
		else
		{
			//	Le formulaire est invalide ou vide
			$this->load->view('home/search', $data);
        }

	}
	



    
    public function profil_doc_rdv()
	{
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/profil_doc_rdv');
	}


///Footer Pages

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