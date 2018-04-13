<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ComTable extends CI_Model
{
    protected $table = 'comments';

    /**
	 *	Ajoute un avis
	 *
	 *	@param string $email_user
     *	@param string $email_pro
     *	@param string $date
     *	@param string $comment
     *  @param string $reception
     *  @param string $clean_place
     *  @param string $feel_good
     *  @param string $on_time
	 *	@return bool Le résultat de la requête
	 */
	public function add_comment($email_user, $email_pro, $date, $comment)
	{
		return $this->db->set('email_user', $email_user)
                        ->set('email_pro', $email_pro)
                        ->set('date', $date)
                        ->set('time', $comment)
                        ->set('reception', $reception)
                        ->set('clean_place', $clean_place)
                        ->set('feel_good', $feel_good)
                        ->set('on_time', $on_time)
                        ->insert($this->table);
    }


    /**
    *	Retourne tous les avis d'un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur
    *	@return objet Le résultat de la requête
    */
	public function get_user_comments($email_user)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email_user', (string) $email_user)
                        ->get()
                        ->result_array();
    }

    /**
    *	Retourne tous les avis d'un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur
    *	@return objet Le résultat de la requête
    */
	public function get_pro_comments($email_pro)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email_pro', (string) $email_pro)
                        ->get()
                        ->result_array();
    }

    /**
    *	Supprime un avis
    *	
    *	@param string $id_comment L'id de l'avis à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_comment($id_comment)
    {
        return $this->db->where('id_comment', $id_comment)
                        ->delete($this->table);
    }

    /**
     * Récupère la liste des professionnels qu'un utilisateur à consulter
     * 
     * @param string $email_user
     * @return string $email_pro
     */
    public function get_email_pro_user($email_user)
    {
        return $this->db->select('email_pro')
                        ->from($this->table)
                        ->where('email_user', (string) $email_user)
                        ->get()
                        ->result_array();
    }

}