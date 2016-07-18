<?PHP if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmember extends CI_Controller{

	function Cmember()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		//$this->load->library('form_validation', 'session');
		$this->load->model('Mmember', '', TRUE);	
	}
	
	

	function index(){
		$this->view_member();
	}
	
	function member(){
		$this->load->view('VaddMember');
	}
	
	function add_member(){	
		$name = $this->input->post('name_member');
		$address= $this->input->post('address_member');
		$data = array(
		'name' => $name,
		'address' => $address
		);
		header('Location: ../');
		
		$this->Mmember->createMember($data);
	}
	
	function view_member(){
		$this->load->model('Mmember');
		$data['member'] = $this->Mmember->getMember();
		$this->load->view('Vmember', $data);
	}
	
	function edit_member(){
		$this->load->model('Mmember');
		$data['member_edit'] = $this->Mmember->getMember();
		$this->load->view('VeditMember', $data);
	}
	
	function delete_member($id){
		$this->load->model('Mmember');
		$this->Mmember->deleteMember($id);
	}
	
}