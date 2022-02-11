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

}
