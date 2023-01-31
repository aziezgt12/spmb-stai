<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_MstProdi extends BaseController
{

	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->load->model("Prodi_model", "Prodi");
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
		$data['titlePage'] = "Master Prodi";
		$data['listOfProdi'] = $this->Prodi->getAll();

		$this->layout('index', $data);
	}

	function save()
	{
		try {
			$param = [];

			$param = $this->input->post();

			if($this->db->get_where("tbl_mst_prodi", ["prodi_name" => $param['prodi_name']])->row())
			{
				echo $this->httpResponseCode(400, "prodi exists");
				die;
			}

			$param = array_merge($param,[
				"create_at" => $this->userId,
				"create_date" => date("Y-m-d H:i:s"),
			]);

			$save = $this->Prodi->save($param);

			if($save){
				echo $this->httpResponseCode(200, "save prodi successfully");
			}else{
				echo $this->httpResponseCode(400, "wrong queries");
			}



		} catch (Exception $e) {
			echo $this->httpResponseCode(400, $e->getMessage());
		}
	}

	function update()
	{
		try {
			$param = [];

			$param = $this->input->post();

			$param = array_merge($param,[
				"update_at" => $this->userId,
				"update_date" => date("Y-m-d H:i:s"),
			]);

			$save = $this->Prodi->update($param);

			if($save){
				echo $this->httpResponseCode(200, "update prodi successfully");
			}else{
				echo $this->httpResponseCode(400, "wrong queries");
			}



		} catch (Exception $e) {
			echo $this->httpResponseCode(400, $e->getMessage());
		}
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
}
