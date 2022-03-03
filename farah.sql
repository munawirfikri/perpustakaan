-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2022 pada 04.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `thn_terbit` year(4) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tersedia` int(50) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `penerbit`, `thn_terbit`, `judul`, `pengarang`, `tersedia`) VALUES
('9781464642', 'Kompetensi Terapan Sinergi Pustaka', 2017, 'Menembus Belantara Irian Barat', 'Daniel Agus Maryanto', 0),
('9786028988247', 'Iranti Mitra Utama', 2015, 'Meraut Hati Yang Luka', 'Harwimuka', 1),
('9786028988599', 'Iranti Mitra Utama', 2017, 'Langit Masih Cerah Candra', 'Rustanti Ningsih S.Pd', 1),
('9786029123302', 'Dagiang Pustaka', 2017, 'Kejarlah Ilmu Hingga Ke Negeri Cina', 'Gol A. Gong - Ibnu Adam', 1),
('9786029759921', 'Kartika Mulya', 2017, 'Gejala Alam Dan Pesona Gunung Bromo', 'Drs. Achmad Sapari dan Dyah Amiyah Lindayani S.Pd', 1),
('9787443442', 'Azka Press', 2006, 'Mengarungi Laut Biru', 'T. Bachtiar', 1),
('9789219604', 'PT. Musi Perkasa Utama', 1998, 'Boing Pemburu Siput', 'W.S. Ibrahim', 1),
('9789219809', 'CV. Jaya Abadi', 1995, 'Nyanyian Sang Gembala', 'Adi S.', 1),
('9789790272125', 'Titian Ilmu', 2014, 'Budiman Anak Yang Jujur', 'A. Setiawan', 1),
('9789790272187', 'Titian Ilmu', 2014, 'Berbakti Untuk Membangun', 'A. Amlia', 1),
('9789790272255', 'Titian Ilmu', 2014, 'Anak Berhati Baja', 'Adhy Asmara', 1),
('9789790272286', 'Titian Ilmu', 2014, 'Baktiku Untukmu', 'Winny Anugrah', 1),
('9789790458529', 'Tiga Serangkai', 2017, 'Cerdas dan Cergas Merancang Sukses Diri', 'Muhammad Habibie', 1),
('978979045858', 'Tiga Serangkai', 2017, 'Belajar Kepada Mereka Yang Pantang Menyerah', 'A. Ruhmat', 1),
('9789790635517', 'Zhorrul Kids', 2017, 'Eri Ipung : Hantu pojok rumah', 'Bambang Joko Susilo', 1),
('9789790635593', 'Zikrul Kids', 2017, 'Lukisan Aini', 'Colacong, Tiastatanka', 1),
('9789791464192', 'Citra Aji Parama', 2017, 'Menyelamatkan Harta Karun Prabu Baka', 'Daniel Agus Maryanto', 1),
('9789791856201', 'Wacana Prima', 2017, 'Kisah Dibalik Minyak Bumi', 'Soekardi', 1),
('9789791856270', 'CV. Wacana Prima', 2017, 'Perang Bubat', 'Reiza Primayandi', 1),
('9789791856317', 'CV. Wacana Prima', 2017, 'Jika Pertiwi Memanggil', 'Arsyad Sidik', 1),
('9789791856348', 'CV. Wacana Prima', 2017, 'Budidaya Jamur', 'Yuliadi Soekardi', 1),
('9789792416466', 'PT. Indah Jaya', 2017, 'Majapahit', 'Yan Paliman', 1),
('9789792416848', 'PT. Indah Jaya Adipratama', 2017, 'Ganjaran Setimpal', 'Geonarto', 1),
('9789792960945', 'Penerbit Andi', 2022, 'Pemrograman Android dengan Android Studio IDE', 'Seng Hansun, S.Si, M.Cs.', 0),
('9789793168104', 'PT. Albama', 2017, 'Seri Cerita Satwa', 'Titik Wahyuni', 1),
('9789793168128', 'PT. Musi Perkasa Utama', 2017, 'Kumpulan Dongeng Anak 2', 'Teguh Setiawan', 1),
('9789793168159', 'PT. Albama', 2017, 'Kisah Dado dan Lebah Madu Yang Bijaksana', 'Putri Lestari', 1),
('9789793756899', 'Pustaka Mina', 2017, 'Indahnya Persahabatan', 'Ida Cynthia', 1),
('9789793931623', 'Media Ilmu', 2017, 'Sang Dian Kampung', 'Uasucha 2', 1),
('9789795714590', 'Ganeca Exact', 2007, 'Persiapan Membuka Usaha Kecil Yang Menghasilkan', 'Erwan Nugraha', 1),
('9789796656271', 'Angkasa Bandung', 2014, 'Kesebelasan Terkuat', 'Nugraha', 1),
('9789796656318', 'Angkasa Bandung', 2014, 'Kiai Cilik', 'Andi Suryadi', 1),
('9789796782666', 'PT. Sarana Panca Karya Nusa', 2017, 'Sultan Hasanuddin', 'A. M. Rustandie', 1),
('9789796784059', 'PT. Sarana Panca Karya Nusa', 2017, 'Danudirja Setiabudhi (Douwes Dekker)', 'Kamal 2 Noor', 1),
('9789796784073', 'PT. Sarana Panca Karya Nusa', 2017, 'Cut Nyak Dien', 'A. M. Rustandie', 1),
('9789796784080', 'PT. Sarana Panca Karya Nusa', 2017, 'Cut Meuthia', 'A. M. Rustandie', 1),
('978979903810', 'Cipta Anugrah', 2017, 'Melati Di Bukit Sunyi', 'Prs. Eko Wiyono', 1),
('9789799039163', 'Karunia', 2017, 'Wanita Teladan', 'Adhi Surya', 1),
('9789799039194', 'Karunia', 2017, 'Si Amir Ahli Pisang', 'Nur Lila', 1),
('9789799039255', 'Karunia', 2017, 'Tekad Pemulung Cilik', 'Drs. Achmad Sapari', 1),
('9789799041012', 'Media Alas Dayu', 2017, 'Sang Pelapor', 'Alfad', 1),
('9789799070494', 'Citra Malang', 2017, 'Pengusaha Angkasa', 'Yoyok Rahayu Basuki S.Pd', 1),
('9789799133304', 'Bintang Books', 2017, 'Detektif Cilik', 'NY. P. E Gazul', 1),
('9789799133328', 'Bintang Books', 2017, 'Sebuah Cerita Untuk AnakAnak : Dukun Mamaria', 'Wimfy S.i', 1),
('9789799133373', 'Bintang Books', 2017, 'Iman dan Ketakwaan', 'U. Wiria', 1),
('9789799133595', 'Bintang Books', 2017, 'Pahlawan Muda', 'Lestari', 1),
('9789799133618', 'Bintang Books', 2017, 'Seri Cerita Rakyat Dari Afrika : Pangeran Singa', 'Kak Yan', 1),
('9789799133663', 'Bintang Books', 2017, 'Seri Cerita Sejarah : Putra Banten', 'R. M Buya AST', 1),
('9789799133755', 'Bintang Books', 2017, 'Seri Cerita Sejarah : Sultan Suriansyah', 'R. M Buya AST', 1),
('9789799133779', 'Bintang Books', 2017, 'Seri Cerita Sejarah : Tuanku Tambusai', 'R. M Buya AST', 1),
('9789896784066', 'PT. Sarana Panca Karya Nusa', 2017, 'Pemberontakan Madiun (MR. Amir Syafiruddin)', 'ST. Miharja', 1),
('9791073619', 'Refika Aditama', 2017, 'Linda Punya Kebun Pepaya', 'Astri Lestari', 1),
('979121106x', 'Azka Press', 2006, 'Pencuri Semak Kenduri', 'Azhary', 1),
('979320706x', 'CV. Bahana Mestika Karya', 1998, 'Anak Bangsa', 'Abel Tasman', 1),
('9793207086', 'Bahana Mestika Karya', 1998, 'Sahabat Sejati', 'Drs. Wirlisman', 1),
('9793207124', 'Bahana Mestika Karya', 2006, 'Buyung Permai', 'Drs. Wirlisman', 1),
('9793207191', 'Bahana Mestika Karya', 2002, 'Cerita Rakyat : Si Anum Tuan', 'Sudarno Mahyudin', 1),
('9793623861', 'CV. Ricardo', 2006, 'Dari Berlumur Lumpur Hingga Menjadi Tamu Negara', 'Witarsa', 1),
('9793623888', 'CV. Ricardo', 2006, 'Catur Ajaib', 'Abel Tasman', 1),
('9793623896', 'CV. Ricardo', 2006, 'Potong Di Kuku Rasa Di Daging', 'M. Noya', 1),
('979380274x', 'Bestari Kids', 2017, 'Seri Aku Ingin Sekolah : Maron Sang Juara', 'Rasyid Akbar', 1),
('9793802774', 'Bestari Kids', 2017, 'Seri Aku Ingin Sekolah : Pengembala Itik', 'Kiki Dinar', 1),
('9793802782', 'Bestari Kids', 2017, 'Seri Aku Ingin Sekolah : Pengusaha Cilik', ' Naniek TR', 1),
('9794040320', 'Angkasa Bandung', 0000, 'Surga Di Bawah Telapak Kaki Ibu', 'M. Toyib', 1),
('9794040489', 'Dharma Karya Cipta', 2006, 'Peternak Ajaib', 'Drs. Aske', 1),
('9794047201', 'Dharma Karya Cipta', 0000, 'Mencari Jejak Pencuri', 'Restu', 1),
('9794048003', 'Sarana Cipta Ilmu', 2006, 'Bertanding BalingBaling', 'Restu', 1),
('9794048526', 'Angkasa Bandung', 0000, 'Putri Berambut Tujuh Hasta', 'A. Setiawan', 1),
('979404863', 'Titian Ilmu', 2006, 'Amir Jadi Juara', 'Drs. Andi S.K , Drs. Rudi S.K', 1),
('979404866', 'Angkasa Bandung', 0000, 'Anak Angkat', 'Restu', 1),
('9794048712', 'Angkasa Bandung', 0000, 'Berani Karena Benar', 'A. Setiawan', 1),
('9794049417', 'Angkasa Bandung', 0000, 'Meraih CitaCita', 'Luki Mufti Fikri', 1),
('979404955', 'Angkasa Bandung', 1993, 'Orang Sabar Kekasih Tuhan', 'A. Setiawan', 1),
('9795472550', 'Angkasa Bandung', 0000, 'Kebersihan Membawa Segudang Prestasi', 'Sumaryono', 1),
('979547263', 'Angkasa Bandung', 2003, 'Dramawan dan Karyanya', 'Saini K. M', 1),
('9797444007', 'Azka Press', 2006, 'Krakatau !!! Krakatau !!!', 'T. Bachtiar', 1),
('9799219361', 'PT. Musi Perkasa Utama', 1995, 'Tempe Dari Desa Senan Sari', 'Sukmara', 1),
('9799219388', 'PT. Musi Perkasa Utama', 1990, 'Waspadai Demam Berdarah', 'Yandianto', 1),
('979921941X', 'PT. Musi Perkasa Utama', 1999, 'Roti Nan Cantik', 'Syahputra', 1),
('9799219531', 'PT. Musi Perkasa Utama', 1992, 'Terpacu UntuK Maju', 'Sonny S.', 1),
('9799219566', 'PT. Musi Perkasa Utama', 1995, 'KelinciKelinci Pak Mandar', 'Yuliadi Soekardi', 1),
('9799219590', 'PT. Musi Perkasa Utama', 1998, 'Di Balik Kaca Akuarium', 'Herri. S', 1),
('9799219663', 'PT. Indah Jaya', 1992, 'Kindung Laradini', 'W. Setiawan', 1),
('9799219906', 'CV. Pustaka Agung', 1994, 'Nyanyian Pantai', 'Hikmat Sudjana', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id_peminjaman` int(11) NOT NULL,
  `jlh_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `id_walas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_walas`) VALUES
('0', 0),
('IA', 1),
('IB', 2),
('IC', 3),
('IIA', 4),
('IIB', 5),
('IIIA', 6),
('IIIB', 7),
('IIIC', 8),
('IVA', 9),
('IVB', 10),
('IVC', 11),
('VA', 12),
('VB', 13),
('VC', 14),
('VIA', 15),
('VIB', 16),
('VIC', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(100) NOT NULL,
  `id_pengunjung` int(100) NOT NULL,
  `id_admin` int(100) NOT NULL,
  `id_buku` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_pengunjung`, `id_admin`, `id_buku`, `status`, `tgl_peminjaman`, `batas_waktu`, `tgl_pengembalian`) VALUES
(68, 2587, 1, '9789792960945', 0, '2022-02-25', '2022-03-04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` int(1) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `tipe_user`, `id_kelas`) VALUES
(1, 'Farah Agadhira, S.T.', 'farah', '1', 1, 'IA'),
(2, 'ghina', 'ghina', '1', 3, '0'),
(2097, 'Muhammad Febri Hafidz', '2097', '2097', 2, 'VIC'),
(2159, 'NAIYA DHUHA MUIZZU', '2159', '2159', 2, 'VIC'),
(2164, 'MUHAMMAD ARIF', '2164', '2164', 2, 'VIB'),
(2169, 'ADILA MIZAN', '2169', '2169', 2, 'VIB'),
(2174, 'ATIQAH MAHDIYAH', '2174', '2174', 2, 'VIC'),
(2182, 'BUSTANIL ILHAM LUBIS', '2182', '2182', 2, 'VIB'),
(2203, 'FANISA', '2203', '2203', 2, 'VIC'),
(2232, 'NADIL SUKRI MAULANA', '2232', '2232', 2, 'VIC'),
(2241, 'Ade Amelia', '2241', '2241', 2, 'VIB'),
(2242, 'ADHE KURNIAWAN', '2242', '2242', 2, 'VIB'),
(2243, 'ADITYA RAHMAT', '2243', '2243', 2, 'VIA'),
(2245, 'ALFAJRI RAMADAN', '2245', '2245', 2, 'VIB'),
(2246, 'ALFAUZI SYUJA', '2246', '2246', 2, 'VIA'),
(2247, 'ALIFIA SAFITRI', '2247', '2247', 2, 'VIA'),
(2248, 'Alivia Desriza', '2248', '2248', 2, 'VIB'),
(2249, 'Alya Zayyan Atiqah', '2249', '2249', 2, 'VIA'),
(2250, 'AMELIA YOLANDA', '2250', '2250', 2, 'VIA'),
(2252, 'ARIF RADIYANSYAH', '2252', '2252', 2, 'VIB'),
(2253, 'Arsad Ibnu Farras', '2253', '2253', 2, 'VIB'),
(2254, 'ARSYADI TAUFAN', '2254', '2254', 2, 'VIB'),
(2255, 'ASHARI AZAN FALAQ', '2255', '2255', 2, 'VIC'),
(2256, 'Asyhfa Cantika Putri', '2256', '2256', 2, 'VIA'),
(2257, 'AULIA CHRISTINA SILABAN', '2257', '2257', 2, 'VIC'),
(2258, 'AULIA PERMATASARI', '2258', '2258', 2, 'VIA'),
(2259, 'AZRA NURUL RIFQAH', '2259', '2259', 2, 'VIB'),
(2260, 'Aqila Salsabila Riandra', '2260', '2260', 2, 'VIB'),
(2261, 'AZWATUN NAJWA', '2261', '2261', 2, 'VIB'),
(2262, 'AZZURA KASIH AULIA', '2262', '2262', 2, 'VIC'),
(2263, 'BIAN AL FATHIR', '2263', '2263', 2, 'VIA'),
(2265, 'DELVIN ALVARO', '2265', '2265', 2, 'VIA'),
(2267, 'DINA PUTRI AMELIA', '2267', '2267', 2, 'VIC'),
(2268, 'Dini Putri Ambarwati', '2268', '2268', 2, 'VIA'),
(2269, 'DINDA AULIA', '2269', '2269', 2, 'VC'),
(2271, 'FADIL VAHLEVI', '2271', '2271', 2, 'VIB'),
(2272, 'FATIR RAZZAQ KARUMULLAH', '2272', '2272', 2, 'VIA'),
(2273, 'FATHIR IMAMUL KHAIR', '2273', '2273', 2, 'VIC'),
(2274, 'Fhairuz Madinah', '2274', '2274', 2, 'VIC'),
(2275, 'Febbri Syaputri', '2275', '2275', 2, 'VIC'),
(2277, 'FILZA GHASSANI FAQIHA', '2277', '2277', 2, 'VIA'),
(2278, 'Helmaliana Putri', '2278', '2278', 2, 'VIA'),
(2281, 'JOE FERDIAN SIHOMBING', '2281', '2281', 2, 'VIC'),
(2282, 'KAREN SIFA ATAYA', '2282', '2282', 2, 'VIB'),
(2283, 'KEYZA NADIN SHAVIRA', '2283', '2283', 2, 'VIC'),
(2284, 'LILA FAHRA DILLA', '2284', '2284', 2, 'VIB'),
(2285, 'LUTHFY MIFTA AL-AZMI', '2285', '2285', 2, 'VIA'),
(2286, 'MANDALA KHALIFATUL R', '2286', '2286', 2, 'VIB'),
(2287, 'MAZAYA QUINSA SUSANTO', '2287', '2287', 2, 'VIA'),
(2288, 'M. ABI FADILLA', '2288', '2288', 2, 'VA'),
(2289, 'M. Chillo Andriano', '2289', '2289', 2, 'VIA'),
(2290, 'M. NABIL BUTAR BUTAR', '2290', '2290', 2, 'VIB'),
(2291, 'M. SATRIA', '2291', '2291', 2, 'VIA'),
(2292, 'Maulana Izhar', '2292', '2292', 2, 'VIB'),
(2294, 'MUHAMMAD AL FARICHI', '2294', '2294', 2, 'VIA'),
(2296, 'MUHAMMAD FAZRUL', '2296', '2296', 2, 'VB'),
(2297, 'MUHAMMAD HABIBI', '2297', '2297', 2, 'VIB'),
(2298, 'MORENO WIGA ZUHRI', '2298', '2298', 2, 'VIC'),
(2300, 'NABIRRA AZRELIA', '2300', '2300', 2, 'VIB'),
(2301, 'NIKITA RISMAULINA BR. P', '2301', '2301', 2, 'VIC'),
(2302, 'OTNIEL SIADARI', '2302', '2302', 2, 'VIC'),
(2303, 'QATRUNNADA SALSABILA', '2303', '2303', 2, 'VIB'),
(2304, 'Rafi Iqram Azami', '2304', '2304', 2, 'VIA'),
(2305, 'RAHMA FAUZIA NABILA', '2305', '2305', 2, 'VIB'),
(2306, 'Rehan Pratama', '2306', '2306', 2, 'VIC'),
(2307, 'Revan Aldiansyah', '2307', '2307', 2, 'VIC'),
(2308, 'RIDHO FADHILLAH', '2308', '2308', 2, 'VIA'),
(2309, 'Rivaldi Pratama', '2309', '2309', 2, 'VIB'),
(2311, 'RAZEL IRANTO SAPUTRA', '2311', '2311', 2, 'VIA'),
(2312, 'Saskia', '2312', '2312', 2, 'VIB'),
(2313, 'Septina Ramadhani', '2313', '2313', 2, 'VIC'),
(2314, 'SHOBRI QOLBU', '2314', '2314', 2, 'VIC'),
(2315, 'SYAFIRA ANDINI', '2315', '2315', 2, 'VIB'),
(2316, 'SYAMSURIAN', '2316', '2316', 2, 'VIC'),
(2317, 'Tri Ramadhani', '2317', '2317', 2, 'VIA'),
(2318, 'USWATUN HASANAH', '2318', '2318', 2, 'VIA'),
(2319, 'Wahyu Kurniawan', '2319', '2319', 2, 'VIC'),
(2320, 'WARIDUL ANWAR', '2320', '2320', 2, 'VIA'),
(2321, 'YUDHA LEFISA AIDIL AHMAD', '2321', '2321', 2, 'VIA'),
(2322, 'ZAHRA NAFISA', '2322', '2322', 2, 'VIB'),
(2323, 'ZLATAN RAMADHAN IBRAHIMOVIC', '2323', '2323', 2, 'VIA'),
(2324, 'MUHAMMAD AZZAM MAHFUZH', '2324', '2324', 2, 'VIC'),
(2336, 'ADZKA ZHAPIRAH', '2336', '2336', 2, 'IVC'),
(2337, 'AFFINO FEBRIANSYAH', '2337', '2337', 2, 'VB'),
(2338, 'AIDIL ADHA', '2338', '2338', 2, 'VA'),
(2339, 'AISYAH LANI', '2339', '2339', 2, 'VA'),
(2340, 'ALYA NAZHIFA', '2340', '2340', 2, 'VC'),
(2341, 'ANDIEN APRILIA RAHMAT', '2341', '2341', 2, 'VC'),
(2342, 'APRILIA PUTRI SURYANTI', '2342', '2342', 2, 'VA'),
(2343, 'ARAFIKRY KURNIAWAN', '2343', '2343', 2, 'VC'),
(2344, 'ARIFA ALYA', '2344', '2344', 2, 'VA'),
(2345, 'ARUMI NINDA KUSUMA', '2345', '2345', 2, 'VB'),
(2346, 'AZAHRA LETISHA', '2346', '2346', 2, 'VB'),
(2348, 'DANANG OKTARIANO LESMANA', '2348', '2348', 2, 'VB'),
(2349, 'DANI SYAWALPRAKASA', '2349', '2349', 2, 'VB'),
(2350, 'DELIA SEPRIANI', '2350', '2350', 2, 'VB'),
(2351, 'DHELIA FIEBRIANI', '2351', '2351', 2, 'VA'),
(2352, 'DINDA NURAINI', '2352', '2352', 2, 'VA'),
(2354, 'EGI PUTRA RAMDES', '2354', '2354', 2, 'VA'),
(2355, 'ELLIN ZAHARANI PANJAITAN', '2355', '2355', 2, 'VB'),
(2356, 'FAHRI ATHAILLAH', '2356', '2356', 2, 'VC'),
(2357, 'FAKHRI HIBATULLAH RYANDRA', '2357', '2357', 2, 'VC'),
(2358, 'FALIKHA JENISAFITRI', '2358', '2358', 2, 'VA'),
(2359, 'FARHAN AULIA HAMDI', '2359', '2359', 2, 'VB'),
(2360, 'FATHURAHMAN LUTHFI ALVINO', '2360', '2360', 2, 'VA'),
(2361, 'FAUZAN SYADIM', '2361', '2361', 2, 'VB'),
(2362, 'FIKRAH ALIYA FAADHILLAH', '2362', '2362', 2, 'VC'),
(2363, 'GILFARI AL IKHSAN', '2363', '2363', 2, 'VB'),
(2364, 'HARIS SYAHPUTRA', '2364', '2364', 2, 'IVA'),
(2365, 'HASBHI FATUL HIDAYAH', '2365', '2365', 2, 'VC'),
(2367, 'JESLIN KIRANA PUTRI', '2367', '2367', 2, 'IVB'),
(2370, 'KHALIF AS SIDDIQ HASPI', '2370', '2370', 2, 'IVC'),
(2371, 'KHYLA APRILIYA AFIFAH', '2371', '2371', 2, 'VC'),
(2372, 'KIMBERLY ANGELIKA', '2372', '2372', 2, 'VC'),
(2373, 'LUCKY ADITIA PANJAITAN', '2373', '2373', 2, 'VB'),
(2374, 'M. FATHAN HANGGARA', '2374', '2374', 2, 'VB'),
(2376, 'MAHARANI', '2376', '2376', 2, 'VA'),
(2377, 'MARSELINA BR SILITONGA', '2377', '2377', 2, 'VB'),
(2378, 'MEYSYA AMELIA', '2378', '2378', 2, 'VA'),
(2379, 'MUHAMAD PADLI PRATAMA', '2379', '2379', 2, 'IVB'),
(2380, 'MUHAMMAD AIDIL AZ ZUKHRUF', '2380', '2380', 2, 'VA'),
(2381, 'MUHAMMAD AIKAL', '2381', '2381', 2, 'IVC'),
(2382, 'MUHAMMAD ARIZA SADEWA', '2382', '2382', 2, 'VB'),
(2383, 'MUHAMMAD RAYHAND HARTONO', '2383', '2383', 2, 'VB'),
(2384, 'MUHAMMAD REZA REHARDIAN', '2384', '2384', 2, 'VC'),
(2385, 'MUHAMMAD RIZKY GEMILANG', '2385', '2385', 2, 'VA'),
(2386, 'MUHAMMAD YUSUF AL GHIFARI', '2386', '2386', 2, 'VA'),
(2387, 'MUTIARA RAMADHANI', '2387', '2387', 2, 'VA'),
(2389, 'NAFSIH FAUZIAH HANDAYANI', '2389', '2389', 2, 'VC'),
(2390, 'NAILA', '2390', '2390', 2, 'VB'),
(2391, 'NAILA ALIFA', '2391', '2391', 2, 'VA'),
(2392, 'NAJWA REGINA PUTRI', '2392', '2392', 2, 'IVA'),
(2393, 'NAYSA WAHYUNI PUTRI', '2393', '2393', 2, 'VC'),
(2394, 'NAYSA YOLANDA', '2394', '2394', 2, 'VB'),
(2395, 'NURSYAFA KOSTARIKA LOVEANDIRA PRATAMA', '2395', '2395', 2, 'VA'),
(2396, 'OLYFIA KHAIRUNISA', '2396', '2396', 2, 'IVB'),
(2397, 'PUTRI GINA FAUZIA', '2397', '2397', 2, 'VB'),
(2398, 'PUTRI RAMADHANI', '2398', '2398', 2, 'VA'),
(2399, 'RAHMI RESDIANI ANNUR', '2399', '2399', 2, 'VC'),
(2400, 'REHAN NOVRIANTO', '2400', '2400', 2, 'VC'),
(2401, 'RENDY ADITYA', '2401', '2401', 2, 'VC'),
(2402, 'REYFAN AHMAD RAFI', '2402', '2402', 2, 'VC'),
(2404, 'RISKI ANANDA PRATAMA', '2404', '2404', 2, 'VA'),
(2405, 'RISKI MULIA AKBAR POHAN', '2405', '2405', 2, 'VA'),
(2406, 'RIZKI WINANDA SIREGAR', '2406', '2406', 2, 'VB'),
(2407, 'RIZKY ADITYA', '2407', '2407', 2, 'VC'),
(2408, 'SAFIA AMELIA', '2408', '2408', 2, 'VB'),
(2409, 'SAKINA AZAHRA ALQISYA', '2409', '2409', 2, 'VB'),
(2411, 'SILVIA RAHMI PUTRI', '2411', '2411', 2, 'IVB'),
(2412, 'SYAFIRA ASYILLA AZURA', '2412', '2412', 2, 'VC'),
(2413, 'SYIFA ALYA', '2413', '2413', 2, 'VB'),
(2414, 'THEOFANY MARGARET SINAGA', '2414', '2414', 2, 'VB'),
(2415, 'YABES AFRILIAN', '2415', '2415', 2, 'IVC'),
(2416, 'ZIA AZKA ARISTA', '2416', '2416', 2, 'VC'),
(2423, 'RAHMAT DANI', '2423', '2423', 2, 'VC'),
(2424, 'Adzra Nashifah', '2424', '2424', 2, 'VIC'),
(2425, 'ALGADING PRAWIRA', '2425', '2425', 2, 'VIA'),
(2426, 'ABDUL LATIF', '2426', '2426', 2, 'IIIC'),
(2427, 'ABIE AL ZAHRI', '2427', '2427', 2, 'IVB'),
(2428, 'ADITYA FEBRIYANDI', '2428', '2428', 2, 'IIA'),
(2430, 'AFIZAH NELMA PUTRI', '2430', '2430', 2, 'IVA'),
(2431, 'AIDIL ADHA', '2431', '2431', 2, 'IVA'),
(2432, 'AISYAH NURFADILLA', '2432', '2432', 2, 'IVA'),
(2433, 'ALHILAL AZAMI', '2433', '2433', 2, 'IVA'),
(2434, 'ALVINO SYAHRIEL HARAHAP', '2434', '2434', 2, 'IVA'),
(2435, 'ANATASSYA GLORIA SILABAN', '2435', '2435', 2, 'IVC'),
(2436, 'ANDRI MAULANA', '2436', '2436', 2, 'IVB'),
(2437, 'ANUGRAH PRATAMA SIREGAR', '2437', '2437', 2, 'IVB'),
(2438, 'AURELLIA PUTRI RAMADHANI', '2438', '2438', 2, 'IIIB'),
(2439, 'AYU RAHMA AZIZA PUTRI', '2439', '2439', 2, 'IVC'),
(2440, 'AZDKIA MELISA', '2440', '2440', 2, 'IVB'),
(2441, 'AZWAR ALIF PUTRA', '2441', '2441', 2, 'IIIA'),
(2442, 'BALQIS APRILIA', '2442', '2442', 2, 'IVC'),
(2443, 'CAHAYA PUTRI RAMADHANI', '2443', '2443', 2, 'IVB'),
(2444, 'CHRISNA AFANDI HUTAGALUNG', '2444', '2444', 2, 'IVC'),
(2445, 'CORRY VANIA SIMATUPANG', '2445', '2445', 2, 'IVC'),
(2446, 'DAFA RIZKI', '2446', '2446', 2, 'IVA'),
(2447, 'DAFFINO WIGA ZHAFRAN', '2447', '2447', 2, 'IVA'),
(2449, 'DIMAS GALANG RAHADI', '2449', '2449', 2, 'IVB'),
(2450, 'DZAHIRAH RAMADHANI', '2450', '2450', 2, 'IVC'),
(2451, 'ERBINA LARASATI', '2451', '2451', 2, 'IVC'),
(2452, 'FABIO ALAMSYAH BAYU', '2452', '2452', 2, 'IVC'),
(2453, 'FAHRI ZAHRAN RABBANI', '2453', '2453', 2, 'IVC'),
(2454, 'FARRAS WALDAN', '2454', '2454', 2, 'IVC'),
(2456, 'FITKRAN CANDRA', '2456', '2456', 2, 'IVA'),
(2457, 'HERU DESRINALDI', '2457', '2457', 2, 'IIIC'),
(2458, 'IBNU ZACKY PRATAMA', '2458', '2458', 2, 'IVA'),
(2459, 'ILHAM ERZA RIADI', '2459', '2459', 2, 'IVA'),
(2460, 'INAYA AZMI LATIFA', '2460', '2460', 2, 'IVC'),
(2461, 'JOE NATHANIEL MORISIHOMBING', '2461', '2461', 2, 'IVC'),
(2462, 'KHALISHAH NASHIFAH DONGORAN', '2462', '2462', 2, 'IVA'),
(2463, 'KHILWA KHAIRUNNISA ARINDRA', '2463', '2463', 2, 'IVA'),
(2464, 'KIRANA RAMADHANI', '2464', '2464', 2, 'IVC'),
(2465, 'LORENZO LAMAS', '2465', '2465', 2, 'IIIA'),
(2466, 'M. RESTU ILAHI', '2466', '2466', 2, 'IIIB'),
(2468, 'MOOI SHYAZA SALSABILA', '2468', '2468', 2, 'IVB'),
(2469, 'MUHAMMAD ARYA FITRAH', '2469', '2469', 2, 'IVB'),
(2470, 'MUHAMMAD ARYA PRATAMA', '2470', '2470', 2, 'IVA'),
(2472, 'MURSYID ALFACHRIE', '2472', '2472', 2, 'IVB'),
(2473, 'MUTIA ANIZAH', '2473', '2473', 2, 'IVA'),
(2474, 'NATASYA PANJAITAN', '2474', '2474', 2, 'IVC'),
(2475, 'NATASYA RISKI', '2475', '2475', 2, 'IVB'),
(2476, 'NAYLA QURRATU AINY', '2476', '2476', 2, 'IVA'),
(2477, 'NAYLA RAMADHANI SYAFIRA', '2477', '2477', 2, 'IVA'),
(2478, 'NAZWA AFIKA DAMANIK', '2478', '2478', 2, 'IVA'),
(2479, 'NOVI ANGGRAENI', '2479', '2479', 2, 'IVB'),
(2480, 'NOVIKA ADHANSI', '2480', '2480', 2, 'IVB'),
(2481, 'QIBAR KHATA', '2481', '2481', 2, 'IIIA'),
(2482, 'RAVHAEL SEPTIAN PERMANA ', '2482', '2482', 2, 'IVC'),
(2483, 'REFIANDI ANNUR', '2483', '2483', 2, 'IIIC'),
(2484, 'REVAN ALFARO', '2484', '2484', 2, 'IVB'),
(2485, 'RHEGINA RAUDATUL AISY', '2485', '2485', 2, 'IVB'),
(2486, 'RIFALNI SESAR ULAMA', '2486', '2486', 2, 'IVC'),
(2487, 'RISKY LESMANA DAMANIK', '2487', '2487', 2, 'IVA'),
(2488, 'RISKY RAMADHAN', '2488', '2488', 2, 'IVB'),
(2489, 'SHAKIRA DEARY OLIVIA', '2489', '2489', 2, 'IVB'),
(2490, 'TALITHA NUR RAHIMA', '2490', '2490', 2, 'IVB'),
(2491, 'THADEUS IRSAN PURBA', '2491', '2491', 2, 'IVC'),
(2492, 'TITANIA AR RAHIM', '2492', '2492', 2, 'IVC'),
(2493, 'YOBEL SIHOMBING', '2493', '2493', 2, 'IVC'),
(2494, 'ZAFRAN PRILINO', '2494', '2494', 2, 'IVA'),
(2495, 'ZAKI AZRA ZULIANDA', '2495', '2495', 2, 'IVB'),
(2508, 'ABI KASIH LB TOBING', '2508', '2508', 2, 'IIA'),
(2509, 'ADRIAN FIRMAN SYAHPUTRA', '2509', '2509', 2, 'IIIA'),
(2510, 'AFFIKA TRI YANI', '2510', '2510', 2, 'IIIC'),
(2512, 'AHMAD KEISS ABDULLAH', '2512', '2512', 2, 'IIIB'),
(2513, 'ALIF CHAN', '2513', '2513', 2, 'IIIA'),
(2514, 'ALIKA NELVIA PUTRI FIRMA', '2514', '2514', 2, 'IIIC'),
(2515, 'AMIRAH NUR AN NAJMI', '2515', '2515', 2, 'IIIB'),
(2516, 'ANINDYA AULIA GUSRI', '2516', '2516', 2, 'IIIC'),
(2517, 'AQILA ZAHRA DINATA', '2517', '2517', 2, 'IIIB'),
(2518, 'ARGHA SYADEKAL', '2518', '2518', 2, 'IIIC'),
(2519, 'ARSYAD AZHARIE', '2519', '2519', 2, 'IIA'),
(2520, 'ARYA NAYAKA PRATAMA', '2520', '2520', 2, 'IIIC'),
(2521, 'AUREL YUDIARA', '2521', '2521', 2, 'IIIC'),
(2522, 'AZRAVA ANDIVA PRATAMA', '2522', '2522', 2, 'IIIB'),
(2523, 'DAMIA ZAHRA RATIFA', '2523', '2523', 2, 'IIIB'),
(2524, 'DASYA GANIYAH', '2524', '2524', 2, 'IIIB'),
(2525, 'DELAN TIRTA', '2525', '2525', 2, 'IIIB'),
(2526, 'DELISA SAFITRI', '2526', '2526', 2, 'IIIC'),
(2527, 'DEVIN SEPRI WARDANA', '2527', '2527', 2, 'IIIB'),
(2528, 'DIMAS RIZKY ADITYA', '2528', '2528', 2, 'IIIC'),
(2529, 'DWI ADI PRATAMA', '2529', '2529', 2, 'IIIB'),
(2530, 'EVA INRIYANI PASARIBU', '2530', '2530', 2, 'IIIA'),
(2531, 'EZAR HAMZAH', '2531', '2531', 2, 'IIIA'),
(2532, 'FADHLI DWI ANANDA', '2532', '2532', 2, 'IIIC'),
(2533, 'FATHIR PAHREZI', '2533', '2533', 2, 'IIIB'),
(2534, 'FATIMAH', '2534', '2534', 2, 'IIIB'),
(2535, 'FRESHILLA DEFA RAMADHANI', '2535', '2535', 2, 'IIIB'),
(2536, 'GEO YAZID FIRMANSYAH', '2536', '2536', 2, 'IIIC'),
(2537, 'GILANG ALFARIZ', '2537', '2537', 2, 'IIB'),
(2538, 'GILBY MALEEQ JIBRANI', '2538', '2538', 2, 'IIIB'),
(2539, 'GISSELA NIKITA HUMAIRA', '2539', '2539', 2, 'IIB'),
(2540, 'HUSNA HULHIZAH', '2540', '2540', 2, 'IIIA'),
(2541, 'KAYLA SYAWITRY LARASSATY', '2541', '2541', 2, 'IIIC'),
(2542, 'KENZO RAMADHAN FITRIO', '2542', '2542', 2, 'IIIC'),
(2543, 'KHOIRUNISA', '2543', '2543', 2, 'IIIB'),
(2544, 'KINARA PUJI CANTIKA SIANTURI', '2544', '2544', 2, 'IIIA'),
(2546, 'MUHAMAD DAFA AL ZIKRI', '2546', '2546', 2, 'IIIC'),
(2547, 'MUHAMMAD RAFVA HADITYA', '2547', '2547', 2, 'IIIB'),
(2548, 'MUHAMMAD ZIDAN ALMUIZ', '2548', '2548', 2, 'IIIA'),
(2550, 'NAILA HUSNA', '2550', '2550', 2, 'IIIC'),
(2551, 'NAYLA DEVINA PUTRI', '2551', '2551', 2, 'IIIB'),
(2552, 'PUTI NAYRA ASYIFA', '2552', '2552', 2, 'IIIA'),
(2553, 'RAMADHANI SALMINOVA', '2553', '2553', 2, 'IIIC'),
(2554, 'RAPHAEL FERGUSON HUTABARAT', '2554', '2554', 2, 'IIIA'),
(2555, 'RESYA SYAVIKA UMARI', '2555', '2555', 2, 'IIIB'),
(2556, 'RISKI ARIFERNANDES', '2556', '2556', 2, 'IIIC'),
(2557, 'RIZKY ESA PUTRA', '2557', '2557', 2, 'IIIA'),
(2558, 'RONI LUISTAFO SIMANJUNTAK', '2558', '2558', 2, 'IIIA'),
(2559, 'RORA VIOLA SIBURIAN', '2559', '2559', 2, 'IIIA'),
(2560, 'SABRINA UMAIZA', '2560', '2560', 2, 'IIIC'),
(2561, 'VANNY SAKHI AZIZYA', '2561', '2561', 2, 'IIIA'),
(2562, 'YOVITA TANIA ASSYIFA', '2562', '2562', 2, 'IIIA'),
(2563, 'YULISA LAIA', '2563', '2563', 2, 'IIIA'),
(2564, 'YUNITA KRISTIN SITORUS', '2564', '2564', 2, 'IIIA'),
(2565, 'ZAHRAN DWI WARDANA', '2565', '2565', 2, 'IIIB'),
(2566, 'ZAHWA FIRDA SALSABILA', '2566', '2566', 2, 'IIIC'),
(2567, 'ZAKY PUTRA RAMADHAN', '2567', '2567', 2, 'IIIC'),
(2568, 'AZZURA SABRINA HIDAYAH', '2568', '2568', 2, 'IVB'),
(2569, 'CAMELIA DWI YULIANDARI', '2569', '2569', 2, 'VC'),
(2570, 'SYAFA AULIA PUTRI', '2570', '2570', 2, 'VIA'),
(2572, 'HASHIFA MULYA RAMAYHUDA', '2572', '2572', 2, 'VC'),
(2573, 'ZHURINA ISTIQOMAH', '2573', '2573', 2, 'IVA'),
(2574, 'Aqbal Putra', '2574', '2574', 2, 'VA'),
(2575, 'JESSICA PANJAITAN', '2575', '2575', 2, 'IIIA'),
(2576, 'HERNANDES RAMOT GAMELIEL PANJAITAN', '2576', '2576', 2, 'IVC'),
(2577, 'MUHAMMAD RIZKI', '2577', '2577', 2, 'VIA'),
(2579, 'ICHSANUDDIN', '2579', '2579', 2, 'VA'),
(2580, 'ABIDZAKI', '2580', '2580', 2, 'IIB'),
(2581, 'AGEEL FEBRATUL ZAEL', '2581', '2581', 2, 'IIB'),
(2582, 'AIDAN ALTAF', '2582', '2582', 2, 'IIA'),
(2583, 'AISY FARRAS', '2583', '2583', 2, 'IIB'),
(2584, 'ARFA ADITYA', '2584', '2584', 2, 'IIB'),
(2585, 'ARFAN RAYYAN', '2585', '2585', 2, 'IIA'),
(2586, 'ARSAT MAULANA', '2586', '2586', 2, 'IIA'),
(2587, 'ARSYAD', '2587', '2587', 2, 'IA'),
(2588, 'AZIKA MELIA NORPAZILA', '2588', '2588', 2, 'IIA'),
(2589, 'AZKA ALDRIC RASYID', '2589', '2589', 2, 'IIB'),
(2590, 'AZRIL PURNAMA', '2590', '2590', 2, 'IIB'),
(2591, 'BALQIS HUMAYRA', '2591', '2591', 2, 'IIA'),
(2592, 'DEIFILA AZZAHRA', '2592', '2592', 2, 'IIB'),
(2593, 'DIJE RASYQUL AHWAL', '2593', '2593', 2, 'IIA'),
(2594, 'ERYANDINI AYU SAGHITA P', '2594', '2594', 2, 'IIA'),
(2595, 'FADLUL HABIB SOFRIJON', '2595', '2595', 2, 'IIB'),
(2596, 'FIKRAN DWI PUTRA', '2596', '2596', 2, 'IIA'),
(2597, 'GWEN SAREEVA HENDRI', '2597', '2597', 2, 'IIA'),
(2598, 'HABIBIE KURNIA HAMDI', '2598', '2598', 2, 'IIA'),
(2599, 'HAFIS GIAN ARDHANI', '2599', '2599', 2, 'IIA'),
(2600, 'HAFIZA KAIRA LUBNA', '2600', '2600', 2, 'IIA'),
(2601, 'HANIF ALFURQON', '2601', '2601', 2, 'IIB'),
(2603, 'HAURA NAZIHA', '2603', '2603', 2, 'IIB'),
(2605, 'INTAN ABIGAIL DS SINAGA', '2605', '2605', 2, 'IIA'),
(2606, 'INTAN ALLISYA PUTRI', '2606', '2606', 2, 'IIB'),
(2607, 'JIHAN HUMAIRAH', '2607', '2607', 2, 'IIB'),
(2608, 'KAYLA NOVIA PUTRI', '2608', '2608', 2, 'IIB'),
(2609, 'KAYLA SAHRANI', '2609', '2609', 2, 'IIA'),
(2610, 'KENZO YARIS', '2610', '2610', 2, 'IIB'),
(2612, 'LUTFIA DANIAWATI', '2612', '2612', 2, 'IIA'),
(2613, 'M. FHADLAN AL FHAZRAH', '2613', '2613', 2, 'IIB'),
(2614, 'MARWAH RISKI RAMADHANI', '2614', '2614', 2, 'IIB'),
(2615, 'MEILANI SENTIA PUTRI', '2615', '2615', 2, 'IIA'),
(2616, 'MUHAMMAD ABID', '2616', '2616', 2, 'IIB'),
(2617, 'MUHAMMAD ABRAHAM NOBERT', '2617', '2617', 2, 'IIA'),
(2618, 'MUHAMMAD ZAFRAN', '2618', '2618', 2, 'IIA'),
(2619, 'NABILA PUTRI ISMAIL', '2619', '2619', 2, 'IIA'),
(2620, 'NADIFA AMIRA', '2620', '2620', 2, 'IIA'),
(2621, 'NAJIB ALI ALRSYI', '2621', '2621', 2, 'IIA'),
(2622, 'NATASYA RAHMANITA', '2622', '2622', 2, 'IIB'),
(2623, 'NAUFAL SYAFRIL SETIAWAN', '2623', '2623', 2, 'IB'),
(2624, 'NOVA ADELIA', '2624', '2624', 2, 'IIB'),
(2625, 'NUR AYNI', '2625', '2625', 2, 'IIA'),
(2626, 'NURUL DINI HIDAYAHTUL HUSNA', '2626', '2626', 2, 'IIB'),
(2627, 'NURUL MATUA SARAGIH', '2627', '2627', 2, 'IIA'),
(2628, 'QIAN CANDRA DWITAMA', '2628', '2628', 2, 'IIB'),
(2629, 'RAISA MALIKA OKTAVIA LAIA', '2629', '2629', 2, 'IIA'),
(2630, 'RAISYA SYAHRANI', '2630', '2630', 2, 'IIB'),
(2631, 'RASYAD ATHAILLAH', '2631', '2631', 2, 'IIA'),
(2632, 'RAVA VALESKA', '2632', '2632', 2, 'IIB'),
(2633, 'RIZQY INDRAWAN SIREGAR', '2633', '2633', 2, 'IIB'),
(2634, 'SALSA AULIA NADHIFA', '2634', '2634', 2, 'IIB'),
(2635, 'SYABIL AKHTAR', '2635', '2635', 2, 'IIA'),
(2636, 'SYIFA HUMAIRA FITRI', '2636', '2636', 2, 'IIB'),
(2637, 'THALITA KHANZA WULANDARI', '2637', '2637', 2, 'IIA'),
(2638, 'ZIDAN OKTAVIANSYAH', '2638', '2638', 2, 'IIB'),
(2639, 'MUHAMMAD RAUF', '2639', '2639', 2, 'IVA'),
(2640, 'LABIBAH GHINATAQIYYAH', '2640', '2640', 2, 'IVA'),
(2641, 'ASYIFA DWI RIZKIA', '2641', '2641', 2, 'IVB'),
(2642, 'ABDIL FIDELYA ALVAREDO', '2642', '2642', 2, 'IA'),
(2644, 'ABQARI ZIDAN PRATAMA MH', '2644', '2644', 2, 'IA'),
(2645, 'AFIF AKALIL DARY ABIYYU', '2645', '2645', 2, 'IB'),
(2646, 'AGUS SALIM', '2646', '2646', 2, 'IC'),
(2647, 'AISYAH RAMADHANI GUSRI', '2647', '2647', 2, 'IA'),
(2648, 'ALIFKI HATA PARISWAR DANI', '2648', '2648', 2, 'IC'),
(2649, 'ALWIE GHALIH SA\'AD RIFAI', '2649', '2649', 2, 'IC'),
(2650, 'AQILLA ALFARUQ', '2650', '2650', 2, 'IA'),
(2651, 'ARIANSYAH', '2651', '2651', 2, 'IB'),
(2652, 'ARKANANTA ZHAFRAN FERDIAN', '2652', '2652', 2, 'IA'),
(2653, 'ASHIFA FEBRIAN', '2653', '2653', 2, 'IB'),
(2654, 'AULIA LYZATUNNISA', '2654', '2654', 2, 'IC'),
(2655, 'AYRA SYALUM HARAHAP', '2655', '2655', 2, 'IB'),
(2656, 'AYRIN ZAHIRA SYAFITRI', '2656', '2656', 2, 'IA'),
(2657, 'AZIZAH NUR RATIFAH', '2657', '2657', 2, 'IC'),
(2658, 'AZKA ALDRIC RAMDES', '2658', '2658', 2, 'IC'),
(2659, 'BAGAS MARWAN ALIYUDIN', '2659', '2659', 2, 'IA'),
(2660, 'BRILLIAN LADIFA WILI', '2660', '2660', 2, 'IA'),
(2661, 'CINDY ROMAITO PANJAITAN', '2661', '2661', 2, 'IC'),
(2662, 'FABRIZIO RADITYA', '2662', '2662', 2, 'IB'),
(2663, 'FADHLI GUSTIO PRATAMA', '2663', '2663', 2, 'IA'),
(2665, 'FAHTAN GUNAWAN', '2665', '2665', 2, 'IC'),
(2666, 'FAUZAN ALI GUNAWAN', '2666', '2666', 2, 'IA'),
(2667, 'HAURA NAZHIFA', '2667', '2667', 2, 'IA'),
(2668, 'INARA FITRIA AHADI', '2668', '2668', 2, 'IA'),
(2669, 'IQBAL', '2669', '2669', 2, 'IB'),
(2670, 'IQBAL ALIANSYAH', '2670', '2670', 2, 'IC'),
(2671, 'JENISA PUTRI', '2671', '2671', 2, 'IB'),
(2672, 'KADZIYA NURRAHMA ARINDRA', '2672', '2672', 2, 'IB'),
(2673, 'KENZIE RAKA PUTRA ADHA', '2673', '2673', 2, 'IB'),
(2674, 'KEREN DWI NATALIA PANJAITAN', '2674', '2674', 2, 'IC'),
(2675, 'LISNA MEIDA LAIA', '2675', '2675', 2, 'IC'),
(2677, 'M. ZIDAN', '2677', '2677', 2, 'IB'),
(2678, 'MAYCLIN PARDEDE', '2678', '2678', 2, 'IC'),
(2679, 'MEMORI JAYA LAIA', '2679', '2679', 2, 'IC'),
(2680, 'MUHAMMAD ADITTYA RIZKI', '2680', '2680', 2, 'IC'),
(2681, 'MUHAMMAD AFIQ RAMADHAN', '2681', '2681', 2, 'IB'),
(2682, 'MUHAMMAD ASHRAF ANANDA JUSRA', '2682', '2682', 2, 'IA'),
(2683, 'NAORA AZRYN ARCHILA', '2683', '2683', 2, 'IB'),
(2684, 'NAUVAL AL-FADILAH DAMANIK', '2684', '2684', 2, 'IA'),
(2685, 'NICOLAS KRISTIAN SIBURIAN', '2685', '2685', 2, 'IC'),
(2686, 'NOER SAFFANA RH', '2686', '2686', 2, 'IA'),
(2687, 'PUTRI AZ ZAHRA RAMADHANI', '2687', '2687', 2, 'IB'),
(2688, 'RAJA KURNIAWAN', '2688', '2688', 2, 'IC'),
(2689, 'RALIN LEFISA AZANI', '2689', '2689', 2, 'IB'),
(2690, 'RANGGA MUHAMMAD ZAKI', '2690', '2690', 2, 'IB'),
(2691, 'RIDHO ABDUL HAFIZ', '2691', '2691', 2, 'IA'),
(2692, 'RIVI MUHAMMAD RIDWAN', '2692', '2692', 2, 'IC'),
(2693, 'SABRINA AULIA', '2693', '2693', 2, 'IA'),
(2694, 'SHIFA ATIQAH', '2694', '2694', 2, 'IC'),
(2695, 'SIFA AKILA', '2695', '2695', 2, 'IB'),
(2696, 'THANIA OKTADIANI', '2696', '2696', 2, 'IA'),
(2697, 'YUDA ANDIKA PUTRA', '2697', '2697', 2, 'IC'),
(2698, 'YULIDA LAILA', '2698', '2698', 2, 'IC'),
(2699, 'ZAHIRA AINUN INNARA', '2699', '2699', 2, 'IB'),
(2700, 'ZAKI RADITYA AL AZMI', '2700', '2700', 2, 'IB'),
(2701, 'ZHAQIRA NADHIFA', '2701', '2701', 2, 'IB'),
(2702, 'CHIVA AMELIA M. PANJAITAN', '2702', '2702', 2, 'IC'),
(2703, 'GHEA ZELVIONA', '2703', '2703', 2, 'IA'),
(2705, 'BARIQ ASSYARIF', '2705', '2705', 2, 'IIIA'),
(2706, 'REYSHA CANTIKA PUTRI', '2706', '2706', 2, 'IIIA'),
(2707, 'BASHAR ASSADIQI', '2707', '2707', 2, 'IIIB'),
(2708, 'ZULFAHMI DEVIN', '2708', '2708', 2, 'IIIC'),
(2710, 'Rabbi\'ul Zikry', '2710', '2710', 2, 'VIB'),
(2711, 'MUHAMMAD BAGAS ANUGERAH', '2711', '2711', 2, 'IVB'),
(2712, 'M. MAIDENIL KEVIN', '2712', '2712', 2, 'VIC'),
(2713, 'AMORA NUR HABIBAH', '2713', '2713', 2, 'IA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walas`
--

CREATE TABLE `walas` (
  `id_walas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walas`
--

INSERT INTO `walas` (`id_walas`, `nama`, `no_hp`) VALUES
(0, 'Kepala Sekolah', '0'),
(1, 'MERRY HONEST', '082285923522'),
(2, 'IRMWATI', '082387459445'),
(3, 'DIANTRI RAHAYU', '081276071694'),
(4, 'ZURINA', '082283239581'),
(5, 'TANTI HARIAWATI', '082271120498'),
(6, 'JASMIATI', '081371021829'),
(7, 'LEYLA EYLIN', '081312151012'),
(8, 'ICE SUNARTI', '082385234160'),
(9, 'YULIUS FIRMANSYAH', '08127541943'),
(10, 'AFRIYENI', '081275553728'),
(11, 'HERI FITRIADI', '085356630443'),
(12, 'TIRAL ENIDA', '081371928733'),
(13, 'MASSAUL KHAIRI', '081378366645'),
(14, 'HILDA DWITA', '082377358805'),
(15, 'SITI NURLIANA', '082284137155'),
(16, 'NURHAIDA', '082388064422'),
(17, 'SRI HARTATI', '085272867297');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_walas` (`id_walas`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD UNIQUE KEY `id_pengunjung` (`id_pengunjung`,`id_buku`,`tgl_peminjaman`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `walas`
--
ALTER TABLE `walas`
  ADD PRIMARY KEY (`id_walas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2714;

--
-- AUTO_INCREMENT untuk tabel `walas`
--
ALTER TABLE `walas`
  MODIFY `id_walas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_walas`) REFERENCES `walas` (`id_walas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
