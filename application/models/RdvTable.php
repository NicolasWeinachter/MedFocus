<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RdvTable extends CI_Model
{
    protected $table = 'rendez-vous';

    /**
	 *	Ajoute un rendez-vous
	 *
     *	@param string $email_user
     *  @param string $email_pro
     *	@param string $date
     *	@param string $time
     *	@param string $cause
	 *	@return bool Le résultat de la requête
	 */
	public function add_rdv($email_user, $email_pro, $date, $time, $cause)
	{
        return $this->db->set('email_user', $email_user)
                        ->set('email_pro', $email_pro)
                        ->set('date', $date)
                        ->set('time', $time)
                        ->set('cause', $cause)
                        ->insert($this->table);
    }

    /**
    *	Retourne tous les rdv d'un utilisateur
    *	
    *	@param string $email L'id de l'utilisateur
    *	@return objet Le résultat de la requête
    */
	public function get_user_rdv($email)
	{
		return $this->db->select('*')
                        ->from($this->table)
                        ->where('email_patient', (string) $email)
                        ->get()
                        ->result_array();
    }

    /**
    *	Supprime un rendez-vous
    *	
    *	@param string $id_rdv L'id du rendez-vous à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_rdv($id_rdv)
    {
        return $this->db->where('id_rdv', $id_rdv)
                        ->delete($this->table);
    }

    /**
     * Verifie la possibilité d'un rendez-vous
     * 
     * @param string $email_pro
     * @param string $date
     * @param string $time
     * @return bool Le résultat de la requête
     */
    public function check_no_rdv($email_pro, $date, $time)
    {
        $this->db->select('*');
        $this->db->from('rendez-vous');
        $this->db->where(['email_pro' => $email_pro, 'date' => $date, 'time' => $time]);

        $query = $this->db->get();
        $result = $query->result_array();

        if ($result)
        {
            return false;
        }
        else {
            return true;
        }

    }
}