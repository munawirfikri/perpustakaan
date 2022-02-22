<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
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
		$this->load->view('template/header');
		$this->load->view('admin/index');
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
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.batas_waktu, peminjaman.tgl_pengembalian 
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$rekapan_peminjaman = json_decode(json_encode($peminjaman), True);
		$data['rekapan_peminjaman'] = $rekapan_peminjaman;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_peminjaman', $data);
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
			$batas_waktu = $_POST['batas_waktu'];

			$this->db->db_debug = false;

			$cekbuku = $this->db->query("SELECT * FROM buku WHERE id_buku = '$id_buku'")->first_row();
			$buku = json_decode(json_encode($cekbuku), True);

			$status = (int) $buku['tersedia'];
			
			if ($status == 1){
				$this->db->query("UPDATE buku SET tersedia = 0 WHERE id_buku = '$id_buku'");
				$query = $this->db->query("INSERT INTO peminjaman values('','$id_pengunjung', '$id_admin', '$id_buku', 0, '$tgl_peminjaman', '$batas_waktu', NULL);");
				if($query){
					redirect ('admin/peminjaman');
				}else{
					echo '<script type ="text/JavaScript">';  
					echo 'alert("NIS yang di inputkan salah")';  
					echo '</script>';  
				}
			}else{
					echo '<script type ="text/JavaScript">';  
					echo 'alert("Buku tidak tersedia")';  
					echo '</script>';  
			}

		}
	}

	public function hapuspeminjaman(){
		$id = $_GET['id'];
		$this->db->delete('peminjaman', array('id_peminjaman' => $id)); 
		redirect ('admin/peminjaman');
	}

	public function cetakrekapanpinjaman()
    {
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.batas_waktu, peminjaman.status
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$datapeminjaman = json_decode(json_encode($peminjaman), True);

        $hari_ini = date("d-m-Y");
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		$hari = $this->_hariini() . ", " . $hari_ini;
        // Data
		$logo = base_url('assets/img/logo.png');
		$data = [
			'title_pdf' => "Laporan Rekapan Data Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'rekapan_peminjaman' => $datapeminjaman,
			'logo' => $logo
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Rekapan Pinjaman Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('admin/laporan/rekapan_pinjaman',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

	public function cetakpeminjamansatuan()
    {
		$id = $_GET['id'];

		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.id_buku, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status, pengguna.id_kelas, pengguna.id_pengguna, peminjaman.batas_waktu
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku AND peminjaman.id_peminjaman = $id
		")->result();
		$datapeminjaman = json_decode(json_encode($peminjaman), True);
		$logo = base_url('assets/img/logo.png');
		$admin = $_SESSION['nama'];
		if(isset($id)){
			$hari_ini = date("d-m-Y");
			// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
			$this->load->library('pdfgenerator');
	
			$hari = $this->_hariini() . ", " . $hari_ini;
			// Data
			
			$data = [
				'title_pdf' => "Informasi Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
				'hari' => $hari,
				'peminjaman' => $datapeminjaman[0],
				'logo' => $logo,
				'admin' => $admin
			];
	
			// filename dari pdf ketika didownload
			
			$file_pdf = "Bukti Peminjaman Perpustakaan $hari_ini";
			// setting paper
			$paper = 'A4';
			//orientasi paper potrait / landscape
			$orientation = "portrait";
			
			$html = $this->load->view('admin/laporan/peminjaman',$data, true);	    
			
			// run dompdf
			$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
		}
 
    }

	public function notifikasipeminjaman()
	{
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, pengguna.id_kelas, pengguna.id_pengguna, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.batas_waktu, peminjaman.status, walas.nama AS nama_walas
			FROM pengguna, buku, peminjaman, kelas, walas
			WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku AND pengguna.id_kelas = kelas.id_kelas AND kelas.id_walas = walas.id_walas AND peminjaman.id_peminjaman = $id
			")->result();
			$peminjaman = json_decode(json_encode($peminjaman), True);

			$datapeminjaman = $peminjaman[0];
			$siswa = $datapeminjaman['nama'];
			$judul = $datapeminjaman['judul'];
			$batas = $datapeminjaman['batas_waktu'];
			$walas = $datapeminjaman['nama_walas'];
			$nis = $datapeminjaman['id_pengguna'];
			$kelas = $datapeminjaman['id_kelas'];
			

			$token = "5102679290:AAHdnKILxBvKKN48Rjr2tqS4jbbwzUkNEXM"; // token bot
		
			$text = "Assalamu'alaikum, izin menginfokan kepada bapak/ibuk atas nama $walas. bahwasanya:

			Nama siswa: $siswa
			NIS: $nis
			Kelas: $kelas

			Meminjam buku dengan judul '$judul'. Agar sekiranya mengingatkan, batas peminjaman hingga tanggal $batas. Terimakasih!";

			$data = [
				'text' => $text,
				'chat_id' => '-767947488', //contoh bot, group id -442697126
			];
			
			file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );	
		}
		redirect('admin/peminjaman');
		
	}

	public function pengembalian()
	{
		$peminjaman = $this->db->query("SELECT peminjaman.id_peminjaman, pengguna.nama, buku.judul, peminjaman.tgl_peminjaman, peminjaman.tgl_pengembalian, peminjaman.status, peminjaman.batas_waktu 
        FROM pengguna, buku, peminjaman
        WHERE peminjaman.id_pengunjung = pengguna.id_pengguna AND peminjaman.id_buku = buku.id_buku
		")->result();
		$rekapan_peminjaman = json_decode(json_encode($peminjaman), True);
		$data['pengembalian'] = $rekapan_peminjaman;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_pengembalian', $data);
		$this->load->view('template/footer');
	}

	public function updatepengembalian()
	{
		$status = $_GET['status'];
		$id = $_GET['id'];
		$denda = $_GET['denda'];

		if(isset($status) && isset($id)){
			if($status==0){
				$this->db->query("UPDATE peminjaman SET status=1, tgl_pengembalian=now() WHERE id_peminjaman = $id");
				if($denda>0){
					$this->db->query("REPLACE INTO denda VALUE ($id, $denda)");
				}
			}else{
				$this->db->query("UPDATE peminjaman SET status=0, tgl_pengembalian=NULL WHERE id_peminjaman = $id");
			}
		redirect('admin/pengembalian');
		}
	}

	public function rekapan_pengembalian()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tabel_rekapan_pengembalian');
		$this->load->view('template/footer');
	}

	public function denda()
	{
		$denda = $this->db->query("SELECT pengguna.nama, buku.judul, denda.jlh_denda, peminjaman.batas_waktu, peminjaman.tgl_pengembalian FROM denda, pengguna, buku, peminjaman WHERE pengguna.id_pengguna = peminjaman.id_pengunjung AND buku.id_buku = peminjaman.id_buku AND denda.id_peminjaman = peminjaman.id_peminjaman")->result();
		$rekapan_denda = json_decode(json_encode($denda), True);
		$data['denda'] = $rekapan_denda;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_denda', $data);
		$this->load->view('template/footer');
	}

	public function cetakrekapandenda()
    {
		$denda = $this->db->query("SELECT pengguna.nama, buku.judul, denda.jlh_denda, peminjaman.batas_waktu, peminjaman.tgl_pengembalian FROM denda, pengguna, buku, peminjaman WHERE pengguna.id_pengguna = peminjaman.id_pengunjung AND buku.id_buku = peminjaman.id_buku AND denda.id_peminjaman = peminjaman.id_peminjaman")->result();
		$datadenda = json_decode(json_encode($denda), True);

        $hari_ini = date("d-m-Y");
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		$hari = $this->_hariini() . ", " . $hari_ini;
        // Data
		$logo = base_url('assets/img/logo.png');

		$data = [
			'title_pdf' => "Laporan Rekapan Riwayat Denda Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'denda' => $datadenda,
			'logo' => $logo
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Rekapan Denda Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('admin/laporan/rekapan_denda',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

	public function buku()
	{
		$buku = $this->db->query("SELECT * FROM buku")->result();
		$rekapan_buku = json_decode(json_encode($buku), True);
		$data['buku'] = $rekapan_buku;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_buku', $data);
		$this->load->view('template/footer');
	}

	public function tambahbuku()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_buku');
		$this->load->view('template/footer');

		if(isset($_POST['submit'])){

			$id_buku = $_POST['id_buku'];
			$judul = $_POST['judul'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];
			$pengarang = $_POST['pengarang'];


			$this->db->db_debug = false;

			$query = $this->db->query("INSERT INTO buku values('$id_buku','$penerbit', '$tahun_terbit', '$judul', '$pengarang', 1);");
			
			if($query){
				redirect ('admin/buku');
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
		$logo = base_url('assets/img/logo.png');
		$data = [
			'title_pdf' => "Laporan Rekapan Data Peminjaman Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'rekapan_buku' => $databuku,
			'logo' => $logo
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Rekapan Buku Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('admin/laporan/rekapan_buku',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

	public function hapusbuku(){
		$id = $_GET['id'];
		$this->db->delete('buku', array('id_buku' => $id)); 
		redirect ('admin/buku');
	}

	public function pengguna()
	{
		$pengguna = $this->db->query("SELECT * FROM pengguna")->result();
		$daftar_pengguna = json_decode(json_encode($pengguna), True);
		$data['pengguna'] = $daftar_pengguna;

		$this->load->view('template/header');
		$this->load->view('admin/tabel_pengguna', $data);
		$this->load->view('template/footer');
	}

	public function tambahpengguna()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_pengguna');
		$this->load->view('template/footer');

		if(isset($_POST['submit'])){

			$id_pengguna = $_POST['id_pengguna'];
			$nama = $_POST['nama'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$tipe_user = $_POST['tipe_user'];
			$id_kelas = $_POST['id_kelas'];

			// $this->db->db_debug = false;

			$query = $this->db->query("INSERT INTO pengguna values('$id_pengguna','$nama','$username', '$password', '$tipe_user', '$id_kelas');");
			
			if($query){
				redirect ('admin/pengguna');
			}else{
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Data tidak berhasil di inputkan")';  
				echo '</script>';  
			}
			
		}
	}

	public function cetakdaftarpengguna()
    {
		$pengguna = $this->db->query("SELECT * FROM pengguna")->result();
		$datapengguna = json_decode(json_encode($pengguna), True);

        $hari_ini = date("d-m-Y");
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');

		$hari = $this->_hariini() . ", " . $hari_ini;
        // Data
		
		$data = [
			'title_pdf' => "Laporan Daftar Pengguna Perpustakaan SDN 04 Minas Jaya $hari_ini",
			'hari' => $hari,
			'pengguna' => $datapengguna
		];

        // filename dari pdf ketika didownload
		
        $file_pdf = "Laporan Daftar Pengguna Perpustakaan $hari_ini";
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
		$html = $this->load->view('admin/laporan/daftar_pengguna',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

	public function hapuspengguna(){
		$id = $_GET['id'];
		$this->db->delete('pengguna', array('id_pengguna' => $id)); 
		redirect ('admin/pengguna');
	}

}
