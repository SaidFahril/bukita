<?php

class Kategori extends Controller{
	public function index()
	{
		$data['title'] = 'Data kategori';
		$data['kategori'] = $this->model('KategoriModel')->getAllKategori();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kategori/index', $data);
		$this->view('templates/footer');
	}

	public function cari()
	{

	}

	public function edit($id)
	{

	}

	public function tambah()
	{
		$data['title'] = 'Tambah Kategori';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('kategori/create', $data);
		$this->view('templates/footer');
	}

	public function simpanKategori()
	{

	}

	public function updateKategori()
	{

	}

	public function hapus($id)
	{

	}
}