<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ServicesTable extends CI_Model
{

    protected $table = 'services';

    /**
	 *	Ajoute une prestation
	 *
	 *	@param string $email_pro
     *	@param int $name
     *	@param string $price
	 *	@return bool Le résultat de la requête
	 */
	public function add_service($email_pro, $year, $name)
	{
		return $this->db->set('email_pro', $email_pro)
                        ->set('name', $name)
                        ->set('price', $price)
                        ->insert($this->table);
    }

    /**
    *	Supprime une prestation
    *	
    *	@param string $id_service L'id de la prestation à supprimer
    *	@return bool Le résultat de la requête
    */
    public function delete_service($id_service)
    {
        return $this->db->where('id_service', $id_service)
                        ->delete($this->table);
    }

}