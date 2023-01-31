<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_MstJalurPendaftaran extends BaseController
{

	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->load->model("Jalurpendaftaran_model", "Jalur");
		$this->load->model("Docpendaftaran_model", "Document");
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
		$data['titlePage'] = "Master Jalur Pendaftaran";
		$data['listOfJalur'] = json_decode(json_encode($this->Jalur->getAll()), FALSE);
		$data['listOfDoc'] = $this->Document->getAll();

		// echo "<pre>";
		// print_r($data['listOfJalur']);
		// die;

		$this->layout('index', $data);
	}

	function save()
	{
		try {
			$param = [];

			$param = $this->input->post();

			$param = array_merge($param,[
				"create_at" => $this->userId,
				"create_date" => date("Y-m-d H:i:s"),
			]);

			$save = $this->Jalur->save($param);

			if($save){
				echo $this->httpResponseCode(200, "save jalur successfully");
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

			$save = $this->Jalur->update($param);

			if($save){
				echo $this->httpResponseCode(200, "update jalur successfully");
			}else{
				echo $this->httpResponseCode(400, "wrong queries");
			}



		} catch (Exception $e) {
			echo $this->httpResponseCode(400, $e->getMessage());
		}
	}

	function getDocumentByParamAjax()
	{
		$param = $this->input->post();

		$listDoc = $this->Document->getAllByParam($param);

		echo json_encode($listDoc);
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

			$exec = $this->Jalur->active($param);

			if($exec){
				echo $this->httpResponseCode(200, "delete jalur successfully");
			}else{
				echo $this->httpResponseCode(400, "wrong queries");
			}



		} catch (Exception $e) {
			echo $this->httpResponseCode(400, $e->getMessage());
		}
	}
}
