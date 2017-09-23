<?php
/**
 * Wecode-judge online jduge
 * @file Notifications_model.php
 * @author truongan - hostmaster@truongan.name.vn
 * @date: 2017-09-15
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function all_languages(){
		return $this->db->get('languages')->result_array();
	}
	public function all_enabled_languages(){
		return $this->db->get_where('languages', array('enabled' => 1));
	}
}