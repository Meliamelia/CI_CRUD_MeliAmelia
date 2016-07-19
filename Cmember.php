<?PHP if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmember extends CI_Controller{

	function Cmember()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Mmember', '', TRUE);	
	}
	
	function index(){
		$this->view_member();
	}
	
	function form_member(){
		$this->load->view('VaddMember');
	}
	
	function add_member(){	
		$name = $this->input->post('name_member');
		$email = $this->input->post('email_member');
		$password = $this->input->post('pass_member');
		$position = $this->input->post('position_member');
		$sex = $this->input->post('sex_member');
		$address= $this->input->post('address_member');
		$data = array(
		'name' => $name,
		'email' => $email,
		'pass' => $password,
		'position' => $position,
		'sex' => $sex,
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
	
	function edit_member($id){
		$this->load->model('Mmember');
		$data['member_edit'] = $this->Mmember->getMemberOne($id);
		$this->load->view('VeditMember', $data);
	}
	
	function edit_memberOne(){	
		$id = $this->input->post('id');
		$name = $this->input->post('name_member');
		$email = $this->input->post('email_member');
		$password = $this->input->post('pass_member');
		$position = $this->input->post('position_member');
		$sex = $this->input->post('sex_member');
		$address= $this->input->post('address_member');
		$data = array(
		'name' => $name,
		'email' => $email,
		'pass' => $password,
		'position' => $position,
		'sex' => $sex,
		'address' => $address
		);
		header('Location: ../');
		$this->Mmember->editMember($id, $data);
	}
	
	
	function delete_member($id){
		$this->load->model('Mmember');
		$this->Mmember->deleteMember($id);
		header('Location: ../');
	}
	
}
