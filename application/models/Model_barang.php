<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function getAllBarang(){
			return $query = $this->db->get('barang');
			//$query->result();
	}	

	public function tambahBarang($barang)
	{
		$data = array('kode' => $barang['kode'],
						'nama' => $barang['nama'],
						'harga' => $barang['harga'],
						'satuan' => $barang['satuan']
				);
		return $this->db->insert('barang', $data);
	}

	public function updateBarang($barang, $kode)
	{
		$data = array('nama' => $barang['nama'],
						'harga' => $barang['harga'],
						'satuan' => $barang['satuan']
				);
		$this->db->where('kode', $kode);
		return $this->db->update('barang', $data);

	}

	public function deleteBarang($kode)
	{
		$this->db->where('kode', $kode);
		return $this->db->delete('barang');
	}

}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */