<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller 
{

	public function index()
	{
		$buku = $this->db->query("SELECT * FROM buku")->result();
		$rekapan_buku = json_decode(json_encode($buku), True);
		$data['buku'] = $rekapan_buku;

		$this->load->view('template/header_pengunjung');
		$this->load->view('pengunjung/index', $data);
		$this->load->view('template/footer');
	}

	public function riwayat()
	{
		$id = $_SESSION['id_pengguna'];

		$riwayat = $this->db->query("SELECT buku.judul, peminjaman.status, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian
		FROM peminjaman, buku WHERE id_pengunjung=$id AND buku.id_buku = peminjaman.id_buku;")->result();
		$riwayat_pengguna = json_decode(json_encode($riwayat), True);
		$data['riwayat'] = $riwayat_pengguna;

		$this->load->view('template/header_pengunjung');
		$this->load->view('pengunjung/riwayat', $data);
		$this->load->view('template/footer');
	}

}
