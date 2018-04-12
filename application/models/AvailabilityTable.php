<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AvailabilityTable extends CI_Model
{

    protected $table = 'availability';

    /**
	 *	Ajoute une disponibilité
	 *
     *	@param string $email_pro
     *	@param string $date
     *	@param string $start_hour
     *	@param string $end_hour
	 *	@return bool Le résultat de la requête
	 */
	public function add_availability($email_pro, $date, $start_hour, $end_hour)
	{
		return $this->db->set('email_pro', $email_pro)
                        ->set('date', $date)
                        ->set('start_hour', $start_hour)
                        ->set('end_hour', $end_hour)
                        ->insert($this->table);
    }

    /**
    *	Supprime une disponibilité
    *	
    *	@param string $email_pro L'id de la disponibilité à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_availability($email_pro)
    {
        return $this->db->where('email_pro', $email_pro)
                        ->delete($this->table);
    }

    /**
     * Verifie une disponibilité
     * 
     * @param string $email_pro 
     * @param string $date 
     * @param string $time 
     * @return bool Le résultat de la requête
     */
    public function check_availability($email_pro, $date, $time)
    {
        $this->db->select('*');
        $this->db->from('availability');
        $this->db->where(['email_pro' => $email_pro, 'date' => $date, 'start_hour <=' => $time, 'end_hour >=' => $time]);

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