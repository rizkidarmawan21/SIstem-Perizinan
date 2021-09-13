<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/dash',$data);
		$this->load->view('templates/footer',$data);
	}

	public function role()
	{
		// $this->load->view('welcome_message');
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'Role';

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->form_validation->set_rules('role','Role', 'required');
		if($this->form_validation->run() == false){

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role',$data);
		$this->load->view('templates/footer',$data);
		} else{
			$this->db->insert('user_role',['role' => $this->input->post('role', true)]);
            $this->session->set_flashdata('message','
			<div class="alert alert-success" role="alert">
 			 New role added!
			</div>
			');
			redirect('admin/role');
		}
		
	}


	public function getRoleById($id_role){
		$id = ['id' => $id_role];
		$data['title'] = 'Change Role';
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role',$id)->row_array();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('admin/changerole',$data);
			$this->load->view('templates/footer',$data);
	}
		
	public function changeRole() {
		$id = $this->input->post('id');
		$role = $this->input->post('role');
		$data = [
			// 'id' =>$id,
			'role'=>$role
		];

		$where=['id' =>$id];
		$this->db->where($where); 
      	$this->db->update('user_role',$data);
		$this->session->set_flashdata('message','
			<div class="alert alert-success" role="alert">
 			 role has been updated!
			</div>
			');
			redirect('admin/role');
	}

	public function deleteRole($role_id){
		$id =['id' =>$role_id];
		$this->db->where($id);
		$this->db->delete('user_role'); 

		$this->session->set_flashdata('message','
		<div class="alert alert-success" role="alert">
		  role success deleted!
		</div>
		');
		redirect('admin/role');
	}

	


	public function roleaccess($role_id)
	{
		// $this->load->view('welcome_message');
		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		
		$data['role'] = $this->db->get_where('user_role',['id'  => $role_id])->row_array();

		$this->db->where('id !=',1);

		$data['menu'] = $this->db->get('user_menu')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('admin/role-access',$data);
		$this->load->view('templates/footer',$data);
	}

	public function changeAccess(){
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu',$data);

		if($result->num_rows() < 1){
			$this->db->insert('user_access_menu',$data);
		}else{
			$this->db->delete('user_access_menu',$data);
		}

		$this->session->set_flashdata('message','
			<div class="alert alert-success" role="alert">
				Access Change
			</div>
			');
	}
}