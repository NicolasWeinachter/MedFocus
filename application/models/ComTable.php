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
	 *	@return bool Le résultat de la requête
	 */
	public function add_comment($email_user, $email_pro, $date, $comment)
	{
		return $this->db->set('email_user', $email_user)
                        ->set('email_pro', $email_pro)
                        ->set('date', $date)
                        ->set('time', $comment)
                        ->insert($this->table);
    }

}