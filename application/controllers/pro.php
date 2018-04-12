<?php

class pro extends CI_Controller
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
        $this->load->model('ProTable');
    
        $data=array();
        $data['error'] = false;

        $this->form_validation->set_rules('email', '"E-mail"', 'trim|required|min_length[7]|max_length[52]|encode_php_tags');

        //	Le formulaire est valide
        if($this->form_validation->run())
        {
            $email = $this->input->post('email');
            $password = $this->input->post('pwd');

            if($this->ProTable->pro_exists($email))
            {
                if($this->ProTable->check_pwd($email, $password))
                {
                    //	On lance une requête
                    $query = $this->ProTable->get_info_pro($email);
                    $data_user = $query['0'];

                    $newdata = array(
                        'username'  => $surname,
                        'email'     => $email,
                        'type'      => "pro",
                        'logged_in' => TRUE
                    );
                    
                    $this->session->set_userdata($newdata);

                    $this->profile();
                }
                else
                {
                    //Pop-up Mauvais Mot de passe
                    $data['error'] = true;
                    $this->load->view('pro/login',$data);                    
                }   
            }
            else
            {
                //Pop-up Mauvais Mot de passe
                $data['error'] = true; 
                $this->load->view('pro/login',$data);                          
            }
        }
        else{
        //	Le formulaire est invalide ou vide
        $this->load->view('pro/login',$data);
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
        $this->load->model('ProTable');
        $this->load->model('DiplomasTable');
        $this->load->model('AvailabilityTable');

        $data=array();
        $data['error'] = false;
        $data['email'] = "xxx@xxx.com";                        

        $this->form_validation->set_rules('inputName', '"Nom"', 'trim|required|min_length[2]|max_length[45]|alpha_dash|encode_php_tags');
 /*       $this->form_validation->set_rules('inputSurname',   '"Prénom"', 'trim|required|min_length[2]|max_length[45]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputBirth', '"Date de naissance"', 'trim|required|min_length[8]|max_length[10]|encode_php_tags');
        $this->form_validation->set_rules('inputEmail', '"Email"', 'trim|required|min_length[7]|max_length[52]|encode_php_tags');
        $this->form_validation->set_rules('inputPassword',   '"Mot de passe"', 'trim|required|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputPassword2', '"Mot de passe 2"', 'trim|required|matches[inputPassword]|min_length[8]|max_length[52]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('inputPhone',   '"Phone"', 'trim|required|min_length[1]|max_length[12]|alpha_dash|encode_php_tags');


        */
        //	Le formulaire est valide
        if($this->form_validation->run())
        {        
            //Onglet 1               
            $name = $this->input->post('inputName');
            $surname = $this->input->post('inputSurname');
            $job = $this->input->post('inputProf');
            $spe = $this->input->post('inputSpeciality');
            $aga = $this->input->post('inputAga');
            $diploma_name = $this->input->post('inputDiplomaName');
            $diploma_year = $this->input->post('inputDiplomaYear'); // A coder
            $gender = "Homme"; // A coder
            $bday = $this->input->post('inputBirth');
            $num_RPPS = $this->input->post('inputRPPS');
            $lang = $this->input->post('inputLanguages');
            $exp = $this->input->post('inputExperience');

            //Onglet 2           
            $service_name = $this->input->post('inputServiceName');// A coder
            $service_price = $this->input->post('inputServicePrice');// A coder
            $service_price = 70;
            $service_length = $this->input->post('inputServiceLength');// A coder
            $service_length = 30;
            $payment = "Chèque"; // A coder
            $carte_vitale = true; // A coder

            //Onglet 3          
            $address = $this->input->post('inputAddressNumber') +
                 " " + $this->input->post('inputAddressName');
            $city = $this->input->post('inputCity');
            $postcode = $this->input->post('inputPostcode');
            $practical= "Parking"; // A coder

            //Onglet 4
            $email = $this->input->post('inputEmail');
            $availability_start_hour = $this->input->post('inputOpen');
            $availability_end_hour = $this->input->post('inputClose');
            $num_tel = $this->input->post('inputPhone');
            $pwd = $this->input->post('inputPassword2');

            //Others
            $premium = 1;

            if(!$this->ProTable->pro_exists($email))
            {
                $this->ProTable->add_pro($email, $pwd, $name, $surname, $bday, $gender, $job, $spe, $exp, $num_RPPS, $aga, $payment,
                $carte_vitale, $address, $postcode, $city, $practical, $num_tel, $premium);

                $newdata = array(
                    'username'  => $surname,
                    'email'     => $email,
                    'type'      => "pro",
                    'logged_in' => TRUE
                );
                
                $this->session->set_userdata($newdata);
            
                $this->profile();
            }
            else
            {
                $data['error'] = true;                
                $data['email'] = $email;                
                $this->load->view('pro/signup', $data);
            }
        }
        //	Le formulaire est invalide ou vide
        else 
        {
            $data['error'] = false;                
            $this->load->view('pro/signup', $data);
        }
    }


    
    public function profile()
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
            $this->load->view('pro/profile', $data, false);                  
        //}
    }



    public function notif()
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
            $this->load->view('pro/notif', $data, false);                  
        //}
    }
    
}