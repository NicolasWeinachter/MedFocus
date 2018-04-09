<?php

class Controller_1 extends CI_Controller
{
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		//	Maintenant, ce code sera exécuté chaque fois que ce contrôleur sera appelé.
		$this->titre_defaut = 'MedFocus';
	}

	public function index()
	{
		$this->accueil();
	}
	
	public function accueil()
	{
		$data = array();
		$data['pseudo'] = 'Arthur';
		$data['email'] = 'email@ndd.fr';
		$data['en_ligne'] = true;
		
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('controller_1/vue', $data, false);
	}
}