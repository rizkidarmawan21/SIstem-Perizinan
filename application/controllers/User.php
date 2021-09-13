<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{
		
		// $this->load->view('welcome_message');
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['getCountKampus1'] = $this->User_model->getCountKampus1();
		$data['getCountKampus2'] = $this->User_model->getCountKampus2();
		$data['getCountKampus3'] = $this->User_model->getCountKampus3();
		$data['getCountKampus4'] = $this->User_model->getCountKampus4();
		
		$data['getCountKampus1Izin'] = $this->User_model->getCountKampus1Izin();
		$data['getCountKampus2Izin'] = $this->User_model->getCountKampus2Izin();
		$data['getCountKampus3Izin'] = $this->User_model->getCountKampus3Izin();
		$data['getCountKampus4Izin'] = $this->User_model->getCountKampus4Izin();
		
		$data['getCountKampus1Back'] = $this->User_model->getCountKampus1Back();
		$data['getCountKampus2Back'] = $this->User_model->getCountKampus2Back();
		$data['getCountKampus3Back'] = $this->User_model->getCountKampus3Back();
		$data['getCountKampus4Back'] = $this->User_model->getCountKampus4Back();


		$data['title'] = 'Dashboard Admin';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/dash',$data);
		$this->load->view('templates/footer',$data);
	}

	public function user()
	{
		
		// $this->load->view('welcome_message');
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'My Profile';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('user/index',$data);
		$this->load->view('templates/footer',$data);
	}

	public function edit(){
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Profile';

		$this->form_validation->set_rules('name', 'Full name', 'required|trim');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('user/edit',$data);
			$this->load->view('templates/footer',$data);
		} else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			// cek jika ada gambar yg diupload
			$upload_image = $_FILES['image']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '10000';
				$config['upload_path'] = './assets/img/profile/';

				$this->load->library('upload', $config);


				if($this->upload->do_upload('image')){
					$old_image = $data['user']['image'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/profile/'. $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image',$new_image);
				} else{
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name',$name);
			$this->db->where('email',$email);
			$this->db->update('user');

			$this->session->set_flashdata('message','
			<div class="alert alert-success" role="alert">
 			 Your profile has been updated!
			</div>
			');
			redirect('user');
		}

	}


	public function changePassword()
	{
		
		// $this->load->view('welcome_message');
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();


		$this->form_validation->set_rules('current_password' ,'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1' ,'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2' ,'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');



		if($this->form_validation->run() ==  false){

			$this->load->view('templates/header',$data);
			$this->load->view('templates/sidebar',$data);
			$this->load->view('templates/topbar',$data);
			$this->load->view('user/changepassword',$data);
			$this->load->view('templates/footer',$data);
		}else{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password,$data['user'] ['password'])){
				$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
				  Wrong Current Password
				</div>
				');
				redirect('user/changepassword');
			}else{
				if($current_password == $new_password){
					$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
				  New Password Cannot Be The Same As Current Password
				</div>
				');
				redirect('user/changepassword');
				}else{
					$password_hash = password_hash($new_password,PASSWORD_DEFAULT);

					$this->db->set('password',$password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message','
				<div class="alert alert-success" role="alert">
				  Password Change
				</div>
				');
				redirect('user/changepassword');
				}
			}
		}
		
	}
}
