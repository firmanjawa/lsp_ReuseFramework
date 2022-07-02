<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//function construct model M_Komik
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Komik');
	}

	//function untuk menampilkan halaman home dan menampilkan datanya yang di simpan ke queryAllKmk
	public function index()
	{
		$queryAllKomik = $this->M_Komik->getDataKomik();
		$DATA = array('queryAllKmk' => $queryAllKomik);
		$this->load->view('home', $DATA);
	}

	//function tmenampilkan halaman tambah_kmk
	public function halaman_tambah() 
	{
		$this->load->view('tambah_kmk');
	}

	//function untuk menampilkan halaman edit dan menampilkan datanya yang di simpan ke queryKmkDetail yang memiliki id $id_komik
	public function halaman_edit($id_komik)
	{
		$queryKomikDetail = $this->M_Komik->getDataKomikDetail($id_komik);
		$DATA = array('queryKmkDetail' => $queryKomikDetail);
		$this->load->view('edit_kmk', $DATA);
	}

	//fungsi tambah insert data
	public function fungsiTambah()
	{
		//membuat variabel penampung  data yang akan dimasukan ke array
		$type 		= $this->input->post('type');
		$nama 		= $this->input->post('nama');
		$genre 		= $this->input->post('genre');
		$author 	= $this->input->post('author');
		$favorite	= $this->input->post('favorite');

		//array data untuk di input
		$ArrInsert = array(
			'type'		=> $type,
			'nama' 		=> $nama,
			'genre' 	=> $genre,
			'author' 	=> $author,
			'favorite'	=> $favorite
		);

		//menjalankan fungsi insertDataKomik di model M_Komik dengan inputan data array $ArrInsert
		$this->M_Komik->insertDataKomik($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		//membuat variabel penampung  data yang akan dimasukan ke array
		$id_komik 	= $this->input->post('id_komik');
		$type 		= $this->input->post('type');
		$nama 		= $this->input->post('nama');
		$genre 		= $this->input->post('genre');
		$author 	= $this->input->post('author');
		$favorite	= $this->input->post('favorite');

		//array data data baru untuk update
		$ArrUpdate = array(
			'type'		=> $type,
			'nama' 		=> $nama,
			'genre' 	=> $genre,
			'author' 	=> $author,
			'favorite'	=> $favorite
		);
	
		//menjalankan fungsi updateDataKomik di model M_Komik dengan inputan data array $ArrUpdate yang memiliki id $id_komik
		$this->M_Komik->updateDataKomik($id_komik, $ArrUpdate);
		redirect(base_url(''));

	}

	//menjalankan fungsi deleteDataKomik di model M_Komik yang memiliki id $id_komik
	public function fungsiDelete($id_komik)
	{
		$this->M_Komik->deleteDataKomik($id_komik);
		redirect(base_url(''));
	}
}
