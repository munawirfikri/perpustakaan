<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('admin/index');
		$this->load->view('template/footer');
	}

	public function peminjaman()
	{
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian 
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$rekapan_peminjaman = json_decode(json_encode($peminjaman), True);
		$_SESSION['rekapan_peminjaman'] = $rekapan_peminjaman;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_peminjaman');
		$this->load->view('template/footer');
	}

	public function tambahpeminjaman()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_peminjaman');
		$this->load->view('template/footer');

		if(isset($_POST['submit'])){
			$id_pengunjung = $_POST['id_peminjam'];
			$id_buku = $_POST['id_buku'];
			$id_admin = $_SESSION['id_pengguna'];
			$tgl_peminjaman = $_POST['tanggal_peminjaman'];
			$tgl_pengembalian = $_POST['tanggal_pengembalian'];

			$this->db->db_debug = false;

			$query = $this->db->query("INSERT INTO peminjaman values('','$id_pengunjung', '$id_admin', '$id_buku', 0, '$tgl_peminjaman', '$tgl_pengembalian');");
			
			if($query){
				redirect ('admin/peminjaman');
			}else{
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Data tidak berhasil di inputkan")';  
				echo '</script>';  
			}
			
		}
	}

	public function pengembalian()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tabel_pengembalian');
		$this->load->view('template/footer');
	}

	public function rekapan_pengembalian()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tabel_rekapan_pengembalian');
		$this->load->view('template/footer');
	}

	public function denda()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tabel_denda');
		$this->load->view('template/footer');
	}

	public function buku()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tabel_buku');
		$this->load->view('template/footer');
	}

}
