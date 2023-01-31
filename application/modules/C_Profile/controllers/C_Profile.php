<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Profile extends BaseController
{

	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->load->model("Prodi_model", "Prodi");
		$this->load->model("Register_model", "Register");

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// echo ;
		// var_dump($this->checkCompleteBiodata())
		// die;
		$data['titlePage'] = "Master Prodi";
		$data['listOfProdi'] = $this->Prodi->getAll();

		$this->layout('index', $data);
	}

	function lengkapiBiodata(){
		$data['titlePage'] = "Biodata Calon Mahasiswa";
		$data['listOfProdi'] = $this->Prodi->getAll();
		$data['row'] = $this->Register->getById($this->userId);

		// echo "<pre>";
		// print_r($data);
		// die;

		

		$this->layout('index', $data);
	}

	function update($type)
	{
		$param = [];
		$param = $this->input->post();
		$param = array_merge($param, ['userid' => $this->userId ]);

		$this->validate($type, $param);

		if($type == 'personal-data')
		{


			$exec = $this->Register->updatePersonalData($param);
			// echo json_encode($exec);
			// die;
			$message = "success update personal data";
		}

		if($type == 'alamat-data')
		{


			$exec = $this->Register->updatePersonalData($param);
			// echo json_encode($param);
			// die;
			$message = "success update data alamat";

		}

		if($exec)
		{
			echo $this->httpResponseCode(200, "$message");
			die;
		}

		echo $this->httpResponseCode(400, "Queries Wrong");

	}


	function deleted()
	{
		try {
			$param = [];

			$param = $this->input->post();

			$param = array_merge($param,[
				"is_active" => 0,
				"delete_at" => $this->userId,
				"delete_by" => date("Y-m-d H:i:s"),
			]);

			$exec = $this->Prodi->update($param);

			if($exec){
				echo $this->httpResponseCode(200, "delete prodi successfully");
			}else{
				echo $this->httpResponseCode(400, "wrong queries");
			}



		} catch (Exception $e) {
			echo $this->httpResponseCode(400, $e->getMessage());
		}
	}

	public function validate($type, $param)
	{
		if($type == 'personal-data')
		{
			if(strlen($param['nik']) == 0) 
			{
				echo $this->httpResponseCode(400, "nik tidak boleh kosong");
				die;
			}
			
			if(strlen($param['nik']) < 16) 
			{
				echo $this->httpResponseCode(400, "nik tidak boleh kurang 16 karakter");
				die;
			}

		

			if(strlen($param['fullname']) == 0) 
			{
				echo $this->httpResponseCode(400, "nama tidak boleh kosong");
				die;
			}

			if(strlen($param['tempat_lahir']) == 0) 
			{
				echo $this->httpResponseCode(400, "tempat_lahir tidak boleh kosong");
				die;
			}

			if(strlen($param['tanggal_lahir']) == 0) 
			{
				echo $this->httpResponseCode(400, "tgl lahir tidak boleh kosong");
				die;
			}
			if(strlen($param['email']) == 0) 
			{
				echo $this->httpResponseCode(400, "email tidak boleh kosong");
				die;
			}

			if(strlen($param['mobilenumber']) == 0) 
			{
				echo $this->httpResponseCode(400, "telp / wa tidak boleh kosong");
				die;
			}
			return true;
		}
		if($type == 'alamat-data')
		{
			if(strlen($param['wni']) == 0) 
			{
				echo $this->httpResponseCode(400, "wni tidak boleh kosong");
				die;
			}
			
			if(strlen($param['desa']) == 0) 
			{
				echo $this->httpResponseCode(400, "desa tidak boleh kosong");
				die;
			}

			if(strlen($param['kecamatan']) == 0) 
			{
				echo $this->httpResponseCode(400, "kecamatan tidak boleh kosong");
				die;
			}

			if(strlen($param['kabupaten']) == 0) 
			{
				echo $this->httpResponseCode(400, "kabupaten tidak boleh kosong");
				die;
			}

			if(strlen($param['provinsi']) == 0) 
			{
				echo $this->httpResponseCode(400, "provinsi tidak boleh kosong");
				die;
			}

			if(strlen($param['jenis_tinggal']) == 0) 
			{
				echo $this->httpResponseCode(400, "tempat tinggal tidak boleh kosong");
				die;
			}

			return true;
		}
	}
}
