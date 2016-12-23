<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{
		$barang = $this->model_barang->getAllBarang();
		$data['barang'] = $barang;
		$this->load->view('vbarang', $data);	
	}

	public function list_barang()
	{
		$barang = $this->model_barang->getAllBarang();
		$data['barang'] = $barang;
		$this->load->view('ajax_list_barang', $data);
	}

	public function tambah()
	{
		$data = array(
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan')
		);

		$query = $this->model_barang->tambahBarang($data);
		if ($query) {
			$info = '<div class="alert alert-success alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> Data berhasil disimpan.
				</div>';
		}else{
			$info = '<div class="alert alert-danger alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Failed!</strong> Data gagal disimpan.
				</div>';
		}

		echo $info;

	}

	public function update()
	{
		$data = array('nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'satuan' => $this->input->post('satuan')
		);
		$kode = $this->input->post('kode');

		$query = $this->model_barang->updateBarang($data, $kode);
		if ($query) {
			$info = '<div class="alert alert-success alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Data berhasil diupdate.
					</div>';
		}else{
			$info = '<div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Failed!</strong> Data gagal diupdate.
					</div>';
		}
		echo $info;
	}

	public function delete()
	{
		$kode = $this->input->post('kode');
		$query = $this->model_barang->deleteBarang($kode);
		if ($query) {
			$info = '<div class="alert alert-success alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Data berhasil dihapus.
					</div>';
		}else{
			$info = '<div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Failed!</strong> Data gagal dihapus.
					</div>';
		}
		echo $info;		
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */