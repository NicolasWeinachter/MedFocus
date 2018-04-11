<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RdvTable extends CI_Model
{
    protected $table = 'rendez-vous';

    /**
	 *	Ajoute un rendez-vous
	 *
	 *	@param string $email_user
     *	@param string $email_pro
     *	@param string $date
     *	@param string $time
     *	@param int $length
     *	@param string $cause
	 *	@return bool Le résultat de la requête
	 */
	public function add_rdv($email_user, $email_pro, $date, $time, $length, $cause)
	{
		return $this->db->set('email_user', $email_user)
                        ->set('email_pro', $email_pro)
                        ->set('date', $date)
                        ->set('time', $time)
                        ->set('length', $length)
                        ->set('cause', $cause)
                        ->insert($this->table);
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

}