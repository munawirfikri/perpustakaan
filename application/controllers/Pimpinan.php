<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		if($_SESSION['tipe_user'] == 2){
			redirect ('auth');
		}
	}


	public function index()
	{
		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/index');
		$this->load->view('template/footer');
	}

	public function _hariini(){
		$hari = date ("D");
	 
		switch($hari){
			case 'Sun':
				$hari_ini = "Minggu";
			break;
	 
			case 'Mon':			
				$hari_ini = "Senin";
			break;
	 
			case 'Tue':
				$hari_ini = "Selasa";
			break;
	 
			case 'Wed':
				$hari_ini = "Rabu";
			break;
	 
			case 'Thu':
				$hari_ini = "Kamis";
			break;
	 
			case 'Fri':
				$hari_ini = "Jumat";
			break;
	 
			case 'Sat':
				$hari_ini = "Sabtu";
			break;
			
			default:
				$hari_ini = "Tidak di ketahui";		
			break;
		}
	 
		return "<b>" . $hari_ini . "</b>";
	 
	}

	public function peminjaman()
	{
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian 
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$rekapan_peminjaman = json_decode(json_encode($peminjaman), True);
		$data['rekapan_peminjaman'] = $rekapan_peminjaman;

		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tabel_peminjaman', $data);
		$this->load->view('template/footer');
	}

	public function tambahpeminjaman()
	{
		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tambah_peminjaman');
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
				redirect ('pimpinan/peminjaman');
			}else{
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Data tidak berhasil di inputkan")';  
				echo '</script>';  
			}
			
		}
	}

	public function hapuspeminjaman(){
		$id = $_GET['id'];
		$this->db->delete('peminjaman', array('id_peminjaman' => $id)); 
		redirect ('pimpinan/peminjaman');
	}

	public function cetakrekapanpinjaman()
    {
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$datapeminjaman = json_decode(json_encode($peminjaman), True);

        $hari_ini = date("d-m-Y");
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		$hari = $this->_hariini() . ", " . $hari_ini;
        // Data
		
		$data = [
			'title_pdf' => "Laporan Rekapan Data Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'rekapan_peminjaman' => $datapeminjaman
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Rekapan Pinjaman Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('pimpinan/laporan/rekapan_pinjaman',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

	public function cetakpeminjamansatuan()
    {
		$id = $_GET['id'];

		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku AND peminjaman.id_peminjaman = $id
		")->result();
		$datapeminjaman = json_decode(json_encode($peminjaman), True);

		if(isset($id)){
			$hari_ini = date("d-m-Y");
			// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
			$this->load->library('pdfgenerator');
	
			$hari = $this->_hariini() . ", " . $hari_ini;
			// Data
			
			$data = [
				'title_pdf' => "Informasi Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
				'hari' => $hari,
				'peminjaman' => $datapeminjaman[0]
			];
	
			// filename dari pdf ketika didownload
			
			$file_pdf = "Laporan Pinjaman Perpustakaan $hari_ini";
			// setting paper
			$paper = 'A4';
			//orientasi paper potrait / landscape
			$orientation = "portrait";
			
			$html = $this->load->view('pimpinan/laporan/peminjaman',$data, true);	    
			
			// run dompdf
			$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
		}
 
    }

	public function pengembalian()
	{
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status 
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$rekapan_peminjaman = json_decode(json_encode($peminjaman), True);
		$data['pengembalian'] = $rekapan_peminjaman;

		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tabel_pengembalian', $data);
		$this->load->view('template/footer');
	}

	public function updatepengembalian()
	{
		$status = $_GET['status'];
		$id = $_GET['id'];

		if(isset($status) && isset($id)){
			if($status==0){
				$this->db->query("UPDATE peminjaman SET status=1 WHERE id_peminjaman = $id");
			}else{
				$this->db->query("UPDATE peminjaman SET status=0 WHERE id_peminjaman = $id");
			}
		redirect('pimpinan/pengembalian');
		}
	}

	public function rekapan_pengembalian()
	{
		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tabel_rekapan_pengembalian');
		$this->load->view('template/footer');
	}

	public function denda()
	{
		$denda = $this->db->query("SELECT pengguna.nama, buku.judul, denda.tgl_bayar, denda.jlh_denda FROM denda, pengguna, buku, peminjaman WHERE pengguna.id_pengguna = peminjaman.id_pengunjung AND buku.id_buku = peminjaman.id_buku AND denda.id_peminjaman = peminjaman.id_peminjaman")->result();
		$rekapan_denda = json_decode(json_encode($denda), True);
		$data['denda'] = $rekapan_denda;

		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tabel_denda', $data);
		$this->load->view('template/footer');
	}

	public function buku()
	{
		$buku = $this->db->query("SELECT * FROM buku")->result();
		$rekapan_buku = json_decode(json_encode($buku), True);
		$data['buku'] = $rekapan_buku;

		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tabel_buku', $data);
		$this->load->view('template/footer');
	}

	public function tambahbuku()
	{
		$this->load->view('template/header_pimpinan');
		$this->load->view('pimpinan/tambah_buku');
		$this->load->view('template/footer');

		if(isset($_POST['submit'])){

			$id_buku = $_POST['id_buku'];
			$judul = $_POST['judul'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];
			$isbn = $_POST['isbn'];


			$this->db->db_debug = false;

			$query = $this->db->query("INSERT INTO buku values('$id_buku','$penerbit', '$tahun_terbit', '$judul', '$isbn');");
			
			if($query){
				redirect ('pimpinan/buku');
			}else{
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Data tidak berhasil di inputkan")';  
				echo '</script>';  
			}
			
		}
	}

	public function cetakrekapanbuku()
    {
		$buku = $this->db->query("SELECT * FROM buku")->result();
		$databuku = json_decode(json_encode($buku), True);

        $hari_ini = date("d-m-Y");
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		$hari = $this->_hariini() . ", " . $hari_ini;
        // Data
		
		$data = [
			'title_pdf' => "Laporan Rekapan Data Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'rekapan_buku' => $databuku
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Rekapan Buku Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('pimpinan/laporan/rekapan_buku',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

}
