CREATE TABLE `tb_bidang` (
  `id_bidang` int(10) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bidang`, `bidang`) VALUES
(1, 'Pengendalian dan Pelaporan'),
(2, 'Ekonomi'),
(3, 'Sosial Budaya'),
(4, 'Fisik dan Prasarana'),
(5, 'Sekretariat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_distrik`
--

CREATE TABLE `tb_distrik` (
  `id_distrik` int(5) NOT NULL,
  `nama_distrik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_distrik`
--

INSERT INTO `tb_distrik` (`id_distrik`, `nama_distrik`) VALUES
(1, 'DEPAPRE'),
(2, 'DEMTA'),
(3, 'YOKARI'),
(4, 'RAVENIRARA'),
(5, 'SENTANI BARAT'),
(6, 'WAIBU'),
(7, 'SETANI'),
(8, 'SENTANI TIMUR'),
(9, 'EBUNGFAUW'),
(10, 'KEMTUK'),
(11, 'KEMTUK GRESI'),
(12, 'GRESI SELATAN'),
(13, 'NIMBORAN'),
(14, 'NIMBOKRANG'),
(15, 'NAMBLONG'),
(16, 'YAPSI'),
(17, 'UNURUMGUAY'),
(18, 'KAUREH'),
(19, 'AIRU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `id_bidang`, `jabatan`) VALUES
(1, 1, 'Kasubid Pengendalian dan Pelaporan'),
(2, 1, 'Kasubid Data dan Analisa'),
(3, 1, 'Staf Bid. Pengendalian dan Pelaporan'),
(4, 3, 'Kasubid Sosial'),
(5, 3, 'Kasubid Budaya'),
(6, 3, 'Staf Bid. Sosial dan Budaya'),
(9, 2, 'Kasubid Perkebunan, Perikanan, Perindustrian, Perdangan, dan koperasi '),
(10, 2, 'Kasubid Pariwisata'),
(11, 2, 'Staf Bid. Ekonomi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kampung`
--

CREATE TABLE `tb_kampung` (
  `id_kampung` int(5) NOT NULL,
  `id_distrik` int(5) NOT NULL,
  `nama_kampung` varchar(50) NOT NULL,
  `jumlah_kk` decimal(10,0) NOT NULL,
  `kk_tambahan` decimal(10,0) NOT NULL,
  `luas_wilayah` decimal(14,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kampung`
--

INSERT INTO `tb_kampung` (`id_kampung`, `id_distrik`, `nama_kampung`, `jumlah_kk`, `kk_tambahan`, `luas_wilayah`) VALUES
(1, 7, 'Sentani Kota', '0', '0', '0'),
(2, 2, 'Demta Kota', '0', '0', '0'),
(3, 2, 'Muris Kecil', '0', '0', '0'),
(4, 2, 'Yakore', '0', '0', '0'),
(5, 2, 'Yaugapsa', '0', '0', '0'),
(6, 2, 'Ambora', '0', '0', '0'),
(7, 2, 'Kamdera', '0', '0', '0'),
(8, 2, 'Muaif', '0', '0', '0'),
(9, 1, 'Waiya', '0', '0', '0'),
(10, 1, 'Wambena', '0', '0', '0'),
(11, 1, 'Dormena', '0', '0', '0'),
(12, 1, 'Yewena', '0', '0', '0'),
(13, 1, 'Tablanusu', '0', '0', '0'),
(14, 1, 'Tablasupa', '0', '0', '0'),
(15, 1, 'Yepase', '0', '0', '0'),
(16, 1, 'Etiyebo', '0', '0', '0'),
(17, 5, 'Sabron Sari', '0', '0', '0'),
(18, 5, 'Sabron Yaru', '0', '0', '0'),
(19, 5, 'Dosay', '0', '0', '0'),
(20, 5, 'Waibron', '0', '0', '0'),
(21, 5, 'Maribu', '0', '0', '0'),
(22, 9, 'Abar', '0', '0', '0'),
(23, 9, 'Babrongko', '0', '0', '0'),
(24, 9, 'Ebungfa', '0', '0', '0'),
(25, 9, 'Khameyaka', '0', '0', '0'),
(26, 9, 'Simporo', '0', '0', '0'),
(27, 18, 'Lapua', '0', '0', '0'),
(28, 18, 'Sebum', '0', '0', '0'),
(29, 18, 'Sokotek', '0', '0', '0'),
(30, 18, 'Umbron', '0', '0', '0'),
(31, 18, 'Yadouw', '0', '0', '0'),
(32, 10, 'Aib', '0', '0', '0'),
(33, 10, 'Bengguin Progo', '0', '0', '0'),
(34, 10, 'Kwansu', '0', '0', '0'),
(35, 10, 'Mamda', '0', '0', '0'),
(36, 10, 'Mamdayawan', '0', '0', '0'),
(37, 10, 'Nambon', '0', '0', '0'),
(38, 10, 'Namei', '0', '0', '0'),
(39, 10, 'Sabeab Kecil', '0', '0', '0'),
(40, 10, 'Sama', '0', '0', '0'),
(41, 10, 'Sekori', '0', '0', '0'),
(42, 10, 'Skoaim', '0', '0', '0'),
(43, 10, 'Soaib', '0', '0', '0'),
(44, 11, 'Braso', '0', '0', '0'),
(45, 11, 'Bring', '0', '0', '0'),
(46, 11, 'Damoi kati', '0', '0', '0'),
(47, 11, 'Demetin', '0', '0', '0'),
(48, 11, 'Hatib', '0', '0', '0'),
(49, 11, 'Ibub', '0', '0', '0'),
(50, 11, 'Jangrang', '0', '0', '0'),
(51, 11, 'Nembu Gresi', '0', '0', '0'),
(52, 11, 'Omon', '0', '0', '0'),
(53, 11, 'Pupehabu', '0', '0', '0'),
(54, 11, 'Swetab', '0', '0', '0'),
(55, 11, 'Yanbra', '0', '0', '0'),
(56, 14, 'Benyom Jaya I', '0', '0', '0'),
(57, 14, 'Benyom Jaya II', '0', '0', '0'),
(58, 14, 'Berab', '0', '0', '0'),
(59, 14, 'Benyom', '0', '0', '0'),
(60, 14, 'Hamongkrang', '0', '0', '0'),
(61, 14, 'Nimbokrang', '0', '0', '0'),
(62, 14, 'Nimbokrang Sari', '0', '0', '0'),
(63, 14, 'Rhepang Muaif', '0', '0', '0'),
(64, 14, 'Wahab', '0', '0', '0'),
(65, 13, 'Benyom', '0', '0', '0'),
(66, 13, 'Gemebs', '0', '0', '0'),
(67, 13, 'Imsar', '0', '0', '0'),
(68, 13, 'Kaitemung', '0', '0', '0'),
(69, 13, 'Kuipons', '0', '0', '0'),
(70, 13, 'Kuwase', '0', '0', '0'),
(71, 13, 'Meyu', '0', '0', '0'),
(72, 13, 'Oyengsi', '0', '0', '0'),
(73, 13, 'Pobaim', '0', '0', '0'),
(74, 13, 'Singgri', '0', '0', '0'),
(75, 13, 'Singgriway', '0', '0', '0'),
(76, 13, 'Tabri', '0', '0', '0'),
(77, 13, 'Yenggu Lama', '0', '0', '0'),
(78, 13, 'Yenggu Baru', '0', '0', '0'),
(79, 15, 'Besum', '0', '0', '0'),
(80, 15, 'Hanggai Hamong', '0', '0', '0'),
(81, 15, 'Imestum', '0', '0', '0'),
(82, 15, 'Karya Bumi', '0', '0', '0'),
(83, 15, 'Sanggai', '0', '0', '0'),
(84, 15, 'Sarmai Atas', '0', '0', '0'),
(85, 15, 'Sarmai Bawah', '0', '0', '0'),
(86, 15, 'Sumbe', '0', '0', '0'),
(87, 15, 'Yakasib', '0', '0', '0'),
(88, 7, 'Dobonsolo', '0', '0', '0'),
(89, 7, 'Hinekombe', '0', '0', '0'),
(90, 7, 'Hobong', '0', '0', '0'),
(91, 7, 'Ifale', '0', '0', '0'),
(92, 7, 'Ifar Besar', '0', '0', '0'),
(93, 7, 'Kehiran', '0', '0', '0'),
(94, 7, 'Sereh', '0', '0', '0'),
(95, 7, 'Yobeh', '0', '0', '0'),
(96, 7, 'Yoboy', '0', '0', '0'),
(97, 8, 'Asei Besar', '0', '0', '0'),
(98, 8, 'Asei kecil', '0', '0', '0'),
(99, 8, 'Ayapo', '0', '0', '0'),
(100, 8, 'Nendali', '0', '0', '0'),
(101, 8, 'Nolokla', '0', '0', '0'),
(102, 8, 'Puay', '0', '0', '0'),
(103, 8, 'Yokiwa', '0', '0', '0'),
(104, 17, 'Beneik', '0', '0', '0'),
(105, 17, 'Garusa', '0', '0', '0'),
(106, 17, 'Guriyad', '0', '0', '0'),
(107, 17, 'Nendalzi', '0', '0', '0'),
(108, 17, 'Sawesuma', '0', '0', '0'),
(109, 17, 'Sentosa', '0', '0', '0'),
(110, 6, 'Bambar', '0', '0', '0'),
(111, 6, 'Dondai', '0', '0', '0'),
(112, 6, 'Doyo Baru', '0', '0', '0'),
(113, 6, 'Doyo Lama', '0', '0', '0'),
(114, 6, 'Kwadeware', '0', '0', '0'),
(115, 6, 'Sosiri', '0', '0', '0'),
(116, 6, 'Yakonde', '0', '0', '0'),
(117, 16, 'Bumi Sahaja', '0', '0', '0'),
(118, 16, 'Bundru', '0', '0', '0'),
(119, 16, 'Kwarja', '0', '0', '0'),
(120, 16, 'Nawa Mukti', '0', '0', '0'),
(121, 16, 'Nawa Mulya', '0', '0', '0'),
(122, 16, 'Onganjaya', '0', '0', '0'),
(123, 16, 'Purnawajati', '0', '0', '0'),
(124, 16, 'Tabbeyan', '0', '0', '0'),
(125, 16, 'Taqwa Bangun', '0', '0', '0'),
(126, 3, 'Buseryo', '0', '0', '0'),
(127, 3, 'Endokisi', '0', '0', '0'),
(128, 3, 'Maruway', '0', '0', '0'),
(129, 3, 'Meukisi', '0', '0', '0'),
(130, 3, 'Snamay', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(14) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `keterangan`) VALUES
(1, 'Bahan Pangan', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kios`
--

CREATE TABLE `tb_kios` (
  `id_kios` int(14) NOT NULL,
  `nama_pedagang` varchar(128) NOT NULL,
  `block` varchar(50) NOT NULL,
  `no_kios` varchar(50) NOT NULL,
  `status_bangunan` varchar(50) NOT NULL,
  `loss` varchar(50) NOT NULL,
  `jenis_dagangan` varchar(50) NOT NULL,
  `no_kontak` varchar(50) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kios`
--

INSERT INTO `tb_kios` (`id_kios`, `nama_pedagang`, `block`, `no_kios`, `status_bangunan`, `loss`, `jenis_dagangan`, `no_kontak`, `keterangan`) VALUES
(1, 'H Welo', 'Block A, LT 1', '01', 'Baru', 'Baru', '-', '-', 'Pedagang Baru'),
(2, 'Zainal Akbar', 'Block A, LT 2', '03', 'Baru', 'Baru', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kwitansi`
--

CREATE TABLE `tb_kwitansi` (
  `id_kwitansi` int(10) NOT NULL,
  `id_kios` int(20) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kwitansi`
--

INSERT INTO `tb_kwitansi` (`id_kwitansi`, `id_kios`, `nama_petugas`, `jumlah`, `keterangan`, `tanggal`) VALUES
(1, 1, 'ekhel', '2500', 'Pembayaran Pajak Perdagangan', '2019-04-23'),
(2, 2, 'ekhel', '23000', 'Pembayaran Pajak Perdagangan', '2019-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id_masuk` int(20) NOT NULL,
  `id_pangkalan` int(14) NOT NULL,
  `tanggal` date NOT NULL,
  `liter` decimal(10,0) NOT NULL,
  `drum` decimal(10,0) NOT NULL,
  `penyedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_masuk`
--

INSERT INTO `tb_masuk` (`id_masuk`, `id_pangkalan`, `tanggal`, `liter`, `drum`, `penyedia`) VALUES
(6, 8, '2019-02-28', '3500', '10', 'PT Sejahtra Keluarga Papua'),
(7, 7, '2019-02-22', '3500', '10', 'PT Sejahtra Keluarga Papua'),
(8, 1, '2019-04-15', '3500', '6', 'PT Wira Sembada'),
(10, 4, '2019-04-16', '3000', '9', 'PT Wira Sembada'),
(11, 7, '2019-04-18', '3000', '9', 'PT Wira Sembada'),
(12, 5, '2019-04-19', '3500', '10', 'PT Wira Sembada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkalan_minyak`
--

CREATE TABLE `tb_pangkalan_minyak` (
  `id_pangkalan` int(10) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pemilik` varchar(128) NOT NULL,
  `id_distrik` int(5) NOT NULL,
  `id_kampung` int(5) NOT NULL,
  `no` varchar(20) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `longitude` varchar(128) NOT NULL,
  `penyedia` varchar(50) NOT NULL,
  `tanggal_mulai_operasi` date NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pangkalan_minyak`
--

INSERT INTO `tb_pangkalan_minyak` (`id_pangkalan`, `nama`, `pemilik`, `id_distrik`, `id_kampung`, `no`, `alamat`, `latitude`, `longitude`, `penyedia`, `tanggal_mulai_operasi`, `status`, `keterangan`, `gambar`) VALUES
(1, 'Sri Widati', 'Widati', 7, 1, 'SKP01S', 'Jembatan Pojok', '-2.549978', '140.476677', 'PT Sejahtra Keluarga Papua', '2017-10-23', 'aktif', '-', 'github.png'),
(4, 'Sugondo', 'Sugondo', 7, 1, 'SKP13S', 'Ifar Gunung', '-2.5631393206748214', '140.54435101163335', 'PT Sejahtra Keluarga Papua', '0000-00-00', 'aktif', '-', 'avatar-2.jpg'),
(5, 'Ahmad', 'Ahmad', 7, 1, 'SKP14S', 'Ifar Gunung', '-2.552549791794848', '140.54756966245122', 'PT Sejahtra Keluarga Papua', '0000-00-00', 'aktif', '-', 'bitbucket.png'),
(6, 'Baharudin Jumadi', 'Baharudin Jumadi', 5, 21, 'PKL/050', 'Jl. Maribu', '-2.502301937278561', '140.37663784635015', 'PT Wira Sembada', '0000-00-00', 'aktif', '-', 'avatar-1.jpg'),
(7, 'Apnur', 'Apnur', 5, 17, 'PKL/051', 'Kertosari', '-2.525068057681939', '140.42461720120855', 'PT Wira Sembada', '0000-00-00', 'aktif', '-', 'bitbucket1.png'),
(8, 'Yohanis Okoseray', 'Yohanis Okoseray', 1, 9, 'PKL/151', 'Distrik Depapre', '-2.461533089802916', '140.36867168557592', 'PT Wira Sembada', '0000-00-00', 'aktif', '-', 'mail_chimp.png'),
(11, 'Michael Kayame', 'Michael', 2, 6, 'PKL/051', '-', '-2.3370966063228535', '140.11760082852788', 'PT Sejahtra Keluarga Papua', '2018-06-26', 'aktif', '-', 'Michael Kayame.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_panggilan` varchar(200) NOT NULL,
  `id_status` int(14) NOT NULL,
  `id_bidang` int(10) NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_lengkap`, `nama_panggilan`, `id_status`, `id_bidang`, `id_jabatan`, `foto`) VALUES
(1, 'Michael Karafir', 'Ekhel', 2, 1, 3, ''),
(2, 'Melkias Wokman, S.Pi', 'Nomes', 1, 2, 11, ''),
(5, 'Y Isak Ormuseray', 'Chaky', 1, 2, 11, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugaslapangan`
--

CREATE TABLE `tb_petugaslapangan` (
  `id_petugas` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `pend` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `id_uraian` int(10) NOT NULL,
  `id_tempat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugaslapangan`
--

INSERT INTO `tb_petugaslapangan` (`id_petugas`, `nama_lengkap`, `pend`, `tahun`, `id_uraian`, `id_tempat`) VALUES
(1, 'YOHANIS YOM', 'SMP', '2003', 3, 1),
(2, 'YANCE FELLE', 'SD', '2014', 3, 1),
(5, 'ALEX MEHUE', 'SMA', '2005', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_retribusi`
--

CREATE TABLE `tb_retribusi` (
  `id_retribusi` int(14) NOT NULL,
  `id_petugas` int(10) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(14) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'PNS'),
(2, 'HONOR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id_tempat` int(14) NOT NULL,
  `nama_tempat` varchar(128) NOT NULL,
  `longitude` varchar(128) NOT NULL,
  `latitude` varchar(128) NOT NULL,
  `luas_pasar` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id_tempat`, `nama_tempat`, `longitude`, `latitude`, `luas_pasar`, `type`, `keterangan`) VALUES
(1, 'PASAR PHARA', '-2.5610409', '140.4905479', '', '', '-'),
(2, 'PASAR DOYO', '-2.5430147', '140.4608808', '', '', '-'),
(3, 'TPA', '-', '-', '', '', '-'),
(4, 'PASAR NENGGUKU', '-', '-', '', '', '-'),
(5, 'PASAR DEPAPRE', '-', '-', '', '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_uraiantugas`
--

CREATE TABLE `tb_uraiantugas` (
  `id_uraian` int(14) NOT NULL,
  `uraian_tugas` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_uraiantugas`
--

INSERT INTO `tb_uraiantugas` (`id_uraian`, `uraian_tugas`) VALUES
(1, 'Petugas Retribusi Karcis Perdagangan'),
(2, 'Petugas Security/Keamanan'),
(3, 'Petugas Kebersihan'),
(4, 'Penjaga Pasar'),
(5, 'Penjaga TPA'),
(6, 'Sopir Truck Sampah'),
(7, 'Penjaga Pasar/Petugas pungut Retribusi Pasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(14) NOT NULL,
  `status` enum('aktif','blok') CHARACTER SET utf8 NOT NULL,
  `nama` varchar(250) CHARACTER SET utf8 NOT NULL,
  `sandi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sandi_deskripsi` varchar(50) NOT NULL,
  `level` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET utf8 NOT NULL,
  `kontak` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `status`, `nama`, `sandi`, `sandi_deskripsi`, `level`, `email`, `nama_lengkap`, `kontak`) VALUES
(1, 'aktif', 'ekhel', '82bc8f5141a48dd57bb43d91a5faae88', 'ekhel123', 1, 'michaelkarafir@gmail.com', 'Michael Karafir', '081344367764'),
(2, 'aktif', 'isak', 'cc02c1ac62255a40dc7e6e6fa14b9466', 'isak', 1, '-', 'Y Isak Ormuseray', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `id_level` int(10) NOT NULL,
  `level` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_level`
--

INSERT INTO `tb_user_level` (`id_level`, `level`) VALUES
(1, 'Administrator'),
(2, 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_distrik`
--
ALTER TABLE `tb_distrik`
  ADD PRIMARY KEY (`id_distrik`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  ADD PRIMARY KEY (`id_kampung`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kios`
--
ALTER TABLE `tb_kios`
  ADD PRIMARY KEY (`id_kios`);

--
-- Indexes for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tb_pangkalan_minyak`
--
ALTER TABLE `tb_pangkalan_minyak`
  ADD PRIMARY KEY (`id_pangkalan`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_petugaslapangan`
--
ALTER TABLE `tb_petugaslapangan`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_retribusi`
--
ALTER TABLE `tb_retribusi`
  ADD PRIMARY KEY (`id_retribusi`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tb_uraiantugas`
--
ALTER TABLE `tb_uraiantugas`
  ADD PRIMARY KEY (`id_uraian`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_distrik`
--
ALTER TABLE `tb_distrik`
  MODIFY `id_distrik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_kampung`
--
ALTER TABLE `tb_kampung`
  MODIFY `id_kampung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kios`
--
ALTER TABLE `tb_kios`
  MODIFY `id_kios` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  MODIFY `id_kwitansi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  MODIFY `id_masuk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_pangkalan_minyak`
--
ALTER TABLE `tb_pangkalan_minyak`
  MODIFY `id_pangkalan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_petugaslapangan`
--
ALTER TABLE `tb_petugaslapangan`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_retribusi`
--
ALTER TABLE `tb_retribusi`
  MODIFY `id_retribusi` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tempat`
--
ALTER TABLE `tb_tempat`
  MODIFY `id_tempat` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_uraiantugas`
--
ALTER TABLE `tb_uraiantugas`
  MODIFY `id_uraian` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;
