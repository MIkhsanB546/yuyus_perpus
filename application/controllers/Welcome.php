<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}
	 
	public function index()
	{
		$data['content']='beranda';
		$this->load->view('welcome_message', $data);
	}
	public function beranda()
	{
		$data['content']='beranda';
		$this->load->view('welcome_message', $data);
	}


	
	// Data buku
	public function buku()
	{
		$data['DataPencarianBuku']	=$this->MSudi->GetData('buku');
		$data['content']='buku/buku';
		$this->load->view('welcome_message', $data);
	}

	public function inputbuku()
	{
		$add['id_buku']		= $this->input->post('id_buku');
		$add['kategori']	= $this->input->post('kategori');
		$add['nama_buku']	= $this->input->post('nama_buku');
		$add['harga']	= $this->input->post('harga');
		$add['stok']	= $this->input->post('stok');
		$add['penerbit']	= $this->input->post('penerbit');
		$this->MSudi->AddData('buku', $add);

		redirect(site_url('Welcome/Buku'));
	}
	public function editbuku()
	{
		$id_buku 				= $this->input->post('id_buku');
		$update['kategori'] 	= $this->input->post('kategori');
		$update['nama_buku']	= $this->input->post('nama_buku');
		$update['harga']	= $this->input->post('harga');
		$update['stok']	= $this->input->post('stok');
		$update['penerbit']	= $this->input->post('penerbit');
		
		$this->MSudi->UpdateData('buku', 'id_buku', $id_buku, $update);

		redirect(site_url('Welcome/Buku'));

	}
	public function deletebuku()
	{
		$id_buku = $this->uri->segment(3);
		$this->MSudi->DeleteData('buku', 'id_buku', $id_buku);
		redirect(site_url('Welcome/buku'));
	}
	public function pencarianbuku()
	{
		$cari = $this->input->post('cari');
		$data['GetDataCariBuku'] = $this->MSudi->GetCariBuku($cari)->result();

		// Memuat tampilan dengan hasil pencarian
		$data['content'] = 'buku/pencarianbuku'; // Pastikan ini sesuai dengan nama tampilan Anda
		$this->load->view('welcome_message', $data); // Sesuaikan dengan tampilan utama Anda
	}



	//Data Penerbit
	public function penerbit()
	{
		$data['DataPencarianBuku']	=$this->MSudi->GetData('penerbit');
		$data['content']='penerbit/penerbit';
		$this->load->view('welcome_message', $data);
	}

	public function penerbitInsert()
	{
		$add['id_penerbit']		= $this->input->post('id_penerbit');
		$add['nama']	= $this->input->post('nama');
		$add['alamat']	= $this->input->post('alamat');
		$add['kota']	= $this->input->post('kota');
		$add['telepon']	= $this->input->post('telepon');

		$this->MSudi->AddData('penerbit', $add);

		redirect(site_url('Welcome/penerbit'));
	}

	public function penerbitUpdate()
	{
		$id_penerbit = $this->input->post('id_penerbit');
		$update['nama'] = $this->input->post('nama');
		$update['alamat'] = $this->input->post('alamat');
		$update['kota'] = $this->input->post('kota');
		$update['telepon'] = $this->input->post('telepon');
		$this->MSudi->UpdateData('penerbit','id_penerbit',$id_penerbit, $update);
		redirect(site_url('Welcome/penerbit'));
	}

	public function penerbitDelete()
	{
		$id_penerbit = $this->uri->segment(3);
		$this->MSudi->DeleteData('penerbit','id_penerbit', $id_penerbit);
		redirect(site_url('Welcome/penerbit'));
	}






}
