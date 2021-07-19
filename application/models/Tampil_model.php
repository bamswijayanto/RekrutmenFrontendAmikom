<?php 
 
class Tampil_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('pasien');
	}
}