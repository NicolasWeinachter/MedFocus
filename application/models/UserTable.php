<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserTable extends CI_Model
{

    protected $table = 'patient';

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
                        ->set('password', $pwd)
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
    *	@param integer $id	L'id de l'utilisateur à supprimer
    *	@return bool		Le résultat de la requête
    */
    public function delete_user($id)
    {
        return $this->db->where('id', (int) $id)
                        ->delete($this->table);
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

        return array('Jean-Michel', 'Gynécologue');
	}
}