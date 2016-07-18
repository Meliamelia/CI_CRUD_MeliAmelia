<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mmember extends CI_Model {
	function Mmember(){
		parent::__construct();
	}
	
	public function createMember($data){
		$this->db->insert('j_member', $data);
	}
	
	public function getMember() {
		$results = array();
		$this->db->select('*');
		$this->db->from('j_member');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
	}
	
	public function getMemberOne($id) {
		$results = array();
		$this->db->select('*');
		$this->db->from('j_member');
		$this->db->where('id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
	}
	public function editMember($id, $data){
		$this->db->where('id', $id);
		$this->db->update('j_member', $data);
	}
	
	public function deleteMember($id){
		$this->db->where('id', $id);
		$this->db->delete('j_member');
	}
}
	
