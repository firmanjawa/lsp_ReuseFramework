<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Komik extends CI_Model {

	//fungsi mengambil data dari tabel komik
	function getDataKomik() {
		$query = $this->db->get('komik');
		return $query->result();
	}

	//fungsi insert data ke tabel komik dengan data $data
	function insertDataKomik($data) {
		$this->db->insert('komik', $data);
	}


	//fungsi mengambil data dari tabel komik yang memiliki id $id_komik
	function getDataKomikDetail($id_komik) {
		$this->db->where('id_komik', $id_komik);
		$query = $this->db->get('komik');
		return $query->row();
	}

	//fungsi insert data update ke tabel komik dengan data $data dan yang memiliki id $id_komik
	function updateDataKomik($id_komik, $data) {
		$this->db->where('id_komik', $id_komik);
		$this->db->update('komik', $data);
	}

	//fungsi menghapus data dari tabel komik yang memiliki id $id_komik
	function deleteDataKomik($id_komik) {
		$this->db->where('id_komik', $id_komik);
		$this->db->delete('komik');
	}

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */