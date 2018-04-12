<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProTable extends CI_Model
{

    protected $table = 'pros';

    /**
	 *	Ajoute un professionnel
	 *
	 *	@param string $email
	 *	@param string $pwd
     *	@param string $name
     *	@param string $surname
     *	@param string $bday
     *	@param string $gender
     *	@param string $job
     *  @param string $spe
     *  @param string $exp
     *  @param int $num_RPPS
     *  @param bool $aga
     *  @param string $payment
     *  @param bool $carte_vitale
     *  @param string $address
     *  @param string $postcode
     *  @param string $city
     *  @param string $practical
     *  @param int $num_tel
     *  @param bool $premium
	 *	@return bool Le résultat de la requête
	 */
    public function add_pro($email, $pwd, $name, $surname, $bday, $gender, $job, $spe, $exp, $num_RPPS, $aga, $payment,
                            $carte_vitale, $address, $postcode, $city, $practical, $num_tel, $premium)
	{
		return $this->db->set('email', $email)
                        ->set('password', md5($pwd))
                        ->set('name', $name)
                        ->set('surname', $surname)
                        ->set('bday', $bday)
                        ->set('gender', $gender)
                        ->set('job', $job)
                        ->set('speciality', $spe)
                        ->set('experience', $exp)
                        ->set('num_RPPS', $num_RPPS)
                        ->set('AGA', $aga)
                        ->set('payment', $payment)
                        ->set('carte_vitale', $carte_vitale)
                        ->set('address', $address)
                        ->set('postal_code', $postcode)
                        ->set('city', $city)
                        ->set('practical_info', $practical)
                        ->set('num_tel', $num_tel)
                        ->set('premium', $premium)
                        ->insert($this->table);
    }

    /**
    *	Supprime un professionnel
    *	
    *	@param integer $email L'id de l'utilisateur à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_pro($email)
    {
        return $this->db->where('email', $email)
                        ->delete($this->table);
    }

    /**
     * Modifie les informations d'un professionnel
     * 
     *	@param string $email
	 *	@param string $pwd
     *	@param string $name
     *	@param string $surname
     *	@param string $bday
     *	@param string $gender
     *	@param string $job
     *  @param string $spe
     *  @param string $exp
     *  @param string $lang
     *  @param int $num_RPPS
     *  @param bool $aga
     *  @param string $payment
     *  @param bool $carte_vitale
     *  @param string $address
     *  @param string $postcode
     *  @param string $city
     *  @param string $practical
     *  @param int $num_tel
     *  @param bool $premium
	 *	@return bool Le résultat de la requête
     */
    public function update_pro($email, $pwd, $name, $surname, $bday, $gender, $job, $spe, $exp, $lang, $num_RPPS, $aga, 
    $payment, $carte_vitale, $address, $postcode, $city, $practical, $num_tel, $premium)
    {  
        $data = array (
            'password'  => $pwd,
            'name'  => $name,
            'surname'  => $surname,
            'gender'  => $gender,
            'bday'  => $bday,
            'job'  => $job,
            'speciality'  => $spe,
            'experience'  => $exp,
            'languages'  => $lang,
            'num_RPPS'  => $num_RPPS,
            'AGA'  => $aga,
            'payment'  => $payment,
            'carte_vitale'  => $carte_vitale,
            'address'  => $address,
            'postal_code'  => $postcode,
            'city'  => $city,
            'practical_info'  => $practical,
            'num_tel'  => $num_tel,
            'premium'  => $premium,

        );
        $this->db->where('email', $email);
        return $this->db->update('pros', $data); 
    }

    /**
    *	Retourne un professionnel
    *	
    *	@param string $email L'id du professionnel à retourner
    *	@return objet Le résultat de la requête
    */
	public function get_info_pro($email)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email', (string) $email)
                        ->get()
                        ->result_array();
    }


/**
    *	Retourne unu liste de pros pour une recherche basique
    *	
    *	@param string $what 
    *	@param string $where
    *	@return objet Le résultat de la requête
    */
    public function get_pros_basic_search($what, $where)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->like('job', (string) $what)
                        ->or_like('speciality', (string) $what)
                        ->or_like('name', (string) $what)
                        ->or_like('surname', (string) $what)
                        ->or_like('address', (string) $where)
                        ->or_like('city', (string) $where)
                        ->or_like('postal_code', (string) $where)
                        ->get()
                        ->result_array();
    }



    /**
    *	Retourne unu liste de pros pour une recherche basique
    *	
    *	@param string $what 
    *	@param string $where
    *	@return objet Le résultat de la requête
    */
    public function get_speciality_basic_search($what, $where)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->like('speciality', (string) $what)
                        ->get()
                        ->result_array();
    }



    /**
     * Verifie l'existence d'un professionnel
     * 
     * @param string $email 
     * @return bool le resultat de la requête
     */
    function pro_exists($email)
    {
        $this->db->select('*'); 
        $this->db->from('pros');
        $this->db->where('email', $email);

        $query = $this->db->get();
        $result = $query->result_array();

        if ($result)
        {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Verifie la correspondance du mot de passe pour la connexion
     * 
     * @param string $email 
     * @param string $password
     * @return bool le resultat de la requête
     */
    function check_pwd($email, $password)
    {
        $this->db->select('password');
        $this->db->from('pros');
        $this->db->where(['email' => $email, 'password' => md5($password)]);

        $query = $this->db->get();
        $result = $query->result_array();

        if ($result)
        {
            return true;
        }
        else {
            return false;
        }
    }

}