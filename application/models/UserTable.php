<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserTable extends CI_Model
{

    protected $table = 'users';

    /**
	 *	Ajoute un utilisateur
	 *
	 *	@param string $email
	 *	@param string $pwd
     *	@param string $name
     *	@param string $surname
     *	@param string $gender
     *	@param string $bday
     *	@param int $num_tel
     *	@param int $num_secu
	 *	@return bool Le résultat de la requête
	 */
	public function add_user($email, $pwd, $name, $surname, $gender, $bday, $num_tel, $num_secu)
	{
		return $this->db->set('email', $email)
                        ->set('password', md5($pwd))
                        ->set('name', $name)
                        ->set('surname', $surname)
                        ->set('gender', $gender)
                        ->set('bday', $bday)
                        ->set('num_tel', $num_tel)
                        ->set('num_secu', $num_secu)
                        ->insert($this->table);
    }

    /**
    *	Supprime un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_user($email)
    {
        return $this->db->where('email', $email)
                        ->delete($this->table);
    }

    /**
     * Modifie les informations d'un utilisateur
     * 
     *	@param string $email
	 *	@param string $pwd
     *	@param string $name
     *	@param string $surname
     *	@param string $gender
     *	@param string $bday
     *	@param int $num_tel
     *	@param int $num_secu
     *  @return bool le résultat de la requête
     */
    public function update_user($email, $pwd, $name, $surname, $gender, $bday, $num_tel, $num_secu)
{  
        $data = array (
            'password'  => $pwd,
            'name'  => $name,
            'surname'  => $surname,
            'gender'  => $gender,
            'bday'  => $bday,
            'num_tel'  => $num_tel,
            'num_secu'  => $num_secu,
        );
        $this->db->where('email', $email);
        return $this->db->update('users', $data); 
    }

    /**
     *	Retourne une liste de $nb dernières news.
    *	
    *	@param integer $nb	Le nombre d'utilisateurs à retourner
    *	@return objet		La liste d'utilisateurs
    */
    public function list_users($nb = 10)
    {
        return $this->db->select('*')
                        ->from($this->table)
                        ->limit($nb)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }

    /**
    *	Retourne un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur à retourner
    *	@return objet Le résultat de la requête
    */
	public function get_info_user($email)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email', (string) $email)
                        ->get()
                        ->result();
    }
    
    /**
     * Verifie l'existence d'un utilisateur
     * 
     * @param string $email 
     * @return bool le resultat de la requête
     */
    function user_exists($email)
    {
        $this->db->select('*'); 
        $this->db->from('users');
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
        $this->db->from('users');
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