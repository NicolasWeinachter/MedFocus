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

}