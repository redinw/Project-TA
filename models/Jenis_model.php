<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// View All jenis
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('JENIS_BARANG');
		$this->db->order_by('ID_JENIS_BARANG', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail All jenis untuk edit
	public function detail($id_jenis)
	{
		$this->db->select('*');
		$this->db->from('JENIS_BARANG');
		$this->db->where('ID_JENIS_BARANG', $id_jenis);
		$this->db->order_by('ID_JENIS_BARANG', 'ASC');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah data jenis
	public function tambah($data)
	{
		$this->db->insert('JENIS_BARANG', $data);
	}

	// Edit data jenis
	public function edit($data)
	{
		$this->db->where('ID_JENIS_BARANG', $data['ID_JENIS_BARANG']);
		$this->db->update('JENIS_BARANG',$data);
	}	

	// Delete data jenis
	public function delete($data)
	{
		$this->db->where('ID_JENIS_BARANG', $data['ID_JENIS_BARANG']);
		$this->db->delete('JENIS_BARANG',$data);
	}	

}

/* End of file Jenis_model.php */
/* Location: ./application/models/Jenis_model.php */