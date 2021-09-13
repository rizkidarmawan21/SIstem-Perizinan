<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kampus_3 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		
		// Load database kedua
		// $this->load->database('database_kampus3', TRUE);
		$this->load->library('form_validation'); 
	}
	public function index()
	{
		// $this->load->view('welcome_message');
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();

		// $data['izin'] = $this->db->get('santri_kampus_4')->result_array();
		
		$data['izin'] =$this->Kampus3_model->getAllData()->result_array();
		$data['title'] = 'Perizinan Santri Kampus 3';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/index',$data);
		$this->load->view('templates/footer',$data);
	}

	public function add(){
		$db2 = $this->load->database('database_kampus3', TRUE);
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Perizinan Santri';
		$data['santri'] = $db2->get('siswa')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/add',$data);
		$this->load->view('templates/footer',$data);
	}

	public function izin($id_santri){
		$id= ['id'=>$id_santri];
		$db3 = $this->load->database('database_kampus3', TRUE);
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Perizinan Santri';
		$data['santri'] = $db3->get_where('siswa',$id)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/izin',$data);
		$this->load->view('templates/footer',$data);
	}

	public function izin_aksi(){
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('kelas','Kelas','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('gedung','Gedung','trim|required');
		$this->form_validation->set_rules('kamar','Kamar','trim|required');
		$this->form_validation->set_rules('wali','Nama Wali','trim|required');
		$this->form_validation->set_rules('nohp','No telepon','trim|required');
		// $this->form_validation->set_rules('tgl_izin','Tgl Izin','trim|required');
		$this->form_validation->set_rules('tgl_kembali','Tgl Kembali','trim|required');
		$this->form_validation->set_rules('jenjang','Jenjang','trim|required');
		$this->form_validation->set_rules('izin','Keperluan Izin','trim|required');
		$this->form_validation->set_rules('keterangan','Keterangan','trim|required');

		if($this->form_validation->run() == false){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Input perizinan gagal!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            $this->index();
        }else{
			$nama = $this->input->post('nama',true);
			$kelas = $this->input->post('kelas',true);
			$gedung = $this->input->post('gedung',true);
			$kamar = $this->input->post('kamar',true);
			$wali = $this->input->post('wali',true);
			$nohp = $this->input->post('nohp',true);
			$alamat = $this->input->post('alamat',true);
			// $tgl_izin = $this->input->post('tgl_izin',true);
			$tgl_izin= time();
			$tgl_kembali = $this->input->post('tgl_kembali',true);
			$jenjang = $this->input->post('jenjang',true);
			$keperluan = $this->input->post('izin',true);
			$keterangan = $this->input->post('keterangan',true);
			if ($keperluan == "Pulang") {
				$status = 0;
			}else {
				$status = 1;
			}

			$data =[
				'nama' =>$nama,
				'kelas' =>$kelas,
				'gedung' =>$gedung,
				'kamar' =>$kamar,
				'wali' =>$wali,
				'no_telepon' =>$nohp,
				'alamat' =>$alamat,
				'tgl_ijin' =>$tgl_izin,
				'tgl_kembali' =>$tgl_kembali,
				'jenjang' =>$jenjang,
				'izin' =>$keperluan,
				'keterangan' =>$keterangan,
				'status' =>$status
			];

			$this->db->insert('santri_kampus_3',$data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Data perizinan berhasil di input
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('kampus_3');
		}
	}

	public function detail($id_santri){
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$id= ['id'=>$id_santri];
		$data['title'] = 'Detail Perizinan';
		$data['santri'] = $this->db->get_where('santri_kampus_3',$id)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/detail',$data);
		$this->load->view('templates/footer',$data);
	}

	public function editIzin($id_santri){
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$id= ['id'=>$id_santri];
		$data['title'] = 'Edit Perizinan';
		$data['santri'] = $this->db->get_where('santri_kampus_3',$id)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/edit_izin',$data);
		$this->load->view('templates/footer',$data);
	}

	public function editIzin_aksi(){
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('kelas','Kelas','trim|required');
		$this->form_validation->set_rules('gedung','Gedung','trim|required');
		$this->form_validation->set_rules('kamar','Kamar','trim|required');
		$this->form_validation->set_rules('wali','Nama Wali','trim|required');
		$this->form_validation->set_rules('no_telepon','No Telepon','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('tgl_izin','Tanggal Izin','trim|required');
		$this->form_validation->set_rules('tgl_kembali','Tgl Kembali','trim|required');
		$this->form_validation->set_rules('jenjang','Jenjang','trim|required');
		$this->form_validation->set_rules('izin','Keperluan Izin','trim|required');
		$this->form_validation->set_rules('keterangan','Keterangan','trim|required');

		if($this->form_validation->run() == false){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Edit data perizinan gagal!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            $this->index();
	}else{
		$id = $this->input->post('id',true);
		$nama = $this->input->post('nama',true);
		$kelas = $this->input->post('kelas',true);
		$gedung = $this->input->post('gedung',true);
		$kamar = $this->input->post('kamar',true);
		$wali = $this->input->post('wali',true);
		$nohp = $this->input->post('no_telepon',true);
		$alamat = $this->input->post('alamat',true);
		$tgl_izin = $this->input->post('tgl_izin',true);
		// $tgl_izin= time();
		$tgl_kembali = $this->input->post('tgl_kembali',true);
		$jenjang = $this->input->post('jenjang',true);
		$keperluan = $this->input->post('izin',true);
		$keterangan = $this->input->post('keterangan',true);
		// $status = $this->input->post('status', true);
		if ($keperluan == "Pulang") {
			$status = 0;
		}else {
			$status = 1;
		}

		$data =[
			'nama' =>$nama,
			'kelas' =>$kelas,
			'gedung' =>$gedung,
			'kamar' =>$kamar,
			'wali' =>$wali,
			'no_telepon' =>$nohp,
			'alamat' =>$alamat,
			'tgl_ijin' =>$tgl_izin,
			'tgl_kembali' =>$tgl_kembali,
			'jenjang' =>$jenjang,
			'izin' =>$keperluan,
			'keterangan' =>$keterangan,
			'status' =>$status
		];

		$id_santri = ['id' =>$id ];
		$this->db->where($id_santri); 
		$this->db->update('santri_kampus_3',$data);

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data perizinan berhasil diupdate.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('kampus_3');

		}
	}

	public function delIzin($id_santri){
		$id =['id' =>$id_santri];
		$this->db->where($id);
		$this->db->delete('santri_kampus_3'); 
		$this->session->set_flashdata('message','
		<div class="alert alert-success" role="alert">
		 Data perizinan berhasil dihapus!
		</div>
		');
		redirect('kampus_3');
	}

	public function printRequest($id_santri){
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$id= ['id'=>$id_santri];
		$data['title'] = 'Print Surat Pengantar';
		$data['kampus'] = 'Pengurus Kampus 3';
		$data['santri'] = $this->db->get_where('santri_kampus_3',$id)->row_array();
		$this->load->view('print/print_request',$data);
	}

	public function printOut($id_santri){
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();

		if($this->session->userdata('role_id') == 1){

			$id= ['id'=>$id_santri];
			$data['title'] = 'Print Perizinan Out';
			$data['santri'] = $this->db->get_where('santri_kampus_3',$id)->row_array();
			$this->load->view('print/print_out',$data);

		}
		elseif($this->session->userdata('role_id') == 14){
			$id= ['id'=>$id_santri];
			$data['title'] = 'Print Perizinan Out';
			$data['santri'] = $this->db->get_where('santri_kampus_3',$id)->row_array();
			$this->load->view('print/print_out',$data);
		}
		else{
			// echo 'access block';
			redirect('auth/blocked');
		}
	}
	
	public function verify($id_santri){
		if($this->session->userdata('role_id') == 1 ){
			$this->db->set('status',1);
			$this->db->where('id',$id_santri);
			$this->db->update('santri_kampus_3');
			$this->index();
		
		}
		elseif($this->session->userdata('role_id') == 14){
			$this->db->set('status',1);
			$this->db->where('id',$id_santri);
			$this->db->update('santri_kampus_3');
			$this->index();
		
		}
		else{
			redirect('auth/blocked');
		}
	}
	public function back($id_santri){
		$this->db->set('status',2);
		$this->db->where('id',$id_santri);
		$this->db->update('santri_kampus_3');
		$this->index();
		
	}

// 	// Data Santri ============================================================================================================================


	public function editSantri($id_santri){
		$id= ['id'=>$id_santri];
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$db3 = $this->load->database('database_kampus3', TRUE);
		$data['title'] = 'Edit Santri';
		$data['santri'] = $db3->get_where('siswa',$id)->row_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/edit_santri',$data);
		$this->load->view('templates/footer',$data);
	}

	public function editSantri_aksi(){
		$db3 = $this->load->database('database_kampus3', TRUE);

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('kelas','Kelas','trim|required');
		$this->form_validation->set_rules('gedung','Gedung','trim|required');
		$this->form_validation->set_rules('kamar','Kamar','trim|required');
		$this->form_validation->set_rules('wali','Nama Wali','trim|required');
		$this->form_validation->set_rules('nohp','No Telepon','trim|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');

		if($this->form_validation->run() == false){
            $this->add();
        }else{
			$id = $this->input->post('id',true);
			$nama = $this->input->post('nama',true);
			$kelas = $this->input->post('kelas',true);
			$gedung = $this->input->post('gedung',true);
			$kamar = $this->input->post('kamar',true);
			$wali = $this->input->post('wali',true);
			$nohp = $this->input->post('nohp',true);
			$alamat = $this->input->post('alamat',true);
			$foto = $this->input->post('foto',true);
			$created_at = $this->input->post('created_at',true);
			$updated_at = $this->input->post('updated_at',true);

			$data = [
				'nama' =>$nama,
				'kelas' =>$kelas,
				'gedung' =>$gedung,
				'kamar' =>$kamar,
				'wali' =>$wali,
				'nohp' =>$nohp,
				'alamat' =>$alamat,
				'foto' =>$foto,
				'created_at' =>$created_at,
				'updated_at' =>$updated_at
			];

			$id_santri = ['id' =>$id ];

			$db3->where($id_santri); 
			$db3->update('siswa',$data);

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data santri berhasil diupdate.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('kampus_3/add');
		}
	}



// 	// submenu masa izin ===============================================================================================================
	
	
	public function masaIzin()
	{
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		
		
		$data['izin'] =$this->Kampus3_model->getAllDataMasaIzin()->result_array();
		$data['title'] = 'Masa Izin Kampus 3';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/masa_izin',$data);
		$this->load->view('templates/footer',$data);
	}	
	
// 	// submenu masa izin ===============================================================================================================
	public function log()
	{
		$data['user'] = $this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
		$data['izin'] =$this->Kampus3_model->getAllDataLog()->result_array();
		$data['title'] = 'Log Perizinan Kampus 3';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('kampus3/log',$data);
		$this->load->view('templates/footer',$data);
	}	
}