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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  MODIFY `id_kwitansi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;
