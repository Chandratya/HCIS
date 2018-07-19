-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2018 at 06:03 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hcis`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(15) NOT NULL DEFAULT '',
  `category_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_desc`) VALUES
('1', 'User Login'),
('2', 'Medical Claim'),
('3', 'Global Absence'),
('4', 'Time Management'),
('5', 'Profile Management'),
('6', 'Pengisian IPP'),
('7', 'Pengisian Performance Evaluation'),
('8', 'Perubahan Superior'),
('9', 'E-Payslip'),
('10', 'Talent Management'),
('11', 'Recruitment'),
('12', 'FPTK'),
('13', 'Change Request'),
('14', 'Termination'),
('15', 'Job Description'),
('16', 'Pengisian Development Program'),
('17', 'Carreer Plan'),
('18', 'Talent Pool'),
('19', 'Training Management'),
('20', 'HCIS Reminder'),
('21', 'Approval'),
('22', 'Pajak'),
('23', 'Workforce Administration'),
('24', 'Global Payroll'),
('26', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE IF NOT EXISTS `coba` (
  `NIK` varchar(25) NOT NULL,
  `empl_name` varchar(255) NOT NULL,
  `NIK_atasan` varchar(25) NOT NULL,
  `superior_Name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_type`
--

CREATE TABLE IF NOT EXISTS `data_type` (
  `type_id` varchar(15) NOT NULL DEFAULT '',
  `type_desc` varchar(15) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_type`
--

INSERT INTO `data_type` (`type_id`, `type_desc`) VALUES
('1', 'Incident'),
('2', 'Request'),
('3', 'Human Error');

-- --------------------------------------------------------

--
-- Table structure for table `exit_form`
--

CREATE TABLE IF NOT EXISTS `exit_form` (
  `id_exit` int(10) NOT NULL AUTO_INCREMENT,
  `penempatan` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `q1` int(2) NOT NULL,
  `q2` int(2) NOT NULL,
  `q3` int(2) NOT NULL,
  `q4` int(2) NOT NULL,
  `q5` int(2) NOT NULL,
  `q6` int(2) NOT NULL,
  `q7` int(2) NOT NULL,
  `q8` int(2) NOT NULL,
  `q9` int(2) NOT NULL,
  `q10` int(2) NOT NULL,
  `q11` int(2) NOT NULL,
  `q12` int(2) NOT NULL,
  `q13` int(2) NOT NULL,
  `q14` int(2) NOT NULL,
  `q15` int(2) NOT NULL,
  `q16` int(2) NOT NULL,
  `q17` int(2) NOT NULL,
  `q18` int(2) NOT NULL,
  `q19` int(2) NOT NULL,
  `q20` int(2) NOT NULL,
  `q21` int(2) NOT NULL,
  `q22` int(2) NOT NULL,
  `q23` int(2) NOT NULL,
  `q24` int(2) NOT NULL,
  `q25` int(2) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY (`id_exit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `exit_form`
--

INSERT INTO `exit_form` (`id_exit`, `penempatan`, `jk`, `date_in`, `date_out`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `reason`, `comment`) VALUES
(9, 'HO Jakarta', 'Pria', '2011-06-12', '2018-06-11', 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 3, 2, 1, 2, 3, 2, 4, 3, 3, 3, 3, 3, 3, 3, 3, 'Karir & Pengembangan kurang jelas', 'Tidak ada'),
(7, 'EBL Est', 'Pria', '2009-02-02', '2015-03-05', 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, 3, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 'reason', 'asd'),
(8, 'Jakarta', 'Pria', '2006-03-01', '2015-12-21', 3, 3, 3, 3, 3, 3, 4, 3, 4, 3, 3, 2, 4, 3, 2, 3, 3, 4, 3, 3, 3, 3, 3, 4, 4, 'Tidak cocok dengan atasan', 'dszsdzxdzsd');

-- --------------------------------------------------------

--
-- Table structure for table `exit_inter`
--

CREATE TABLE IF NOT EXISTS `exit_inter` (
  `nama_karyawan` varchar(75) NOT NULL,
  `jabatan_terakhir` varchar(50) NOT NULL,
  `departemen` varchar(40) NOT NULL,
  `no_karyawan` int(15) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `q1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `q3` varchar(200) NOT NULL,
  `aspek1` varchar(200) NOT NULL,
  `aspek2` varchar(200) NOT NULL,
  `aspek3` varchar(200) NOT NULL,
  `aspek4` varchar(200) NOT NULL,
  `aspek5` varchar(200) NOT NULL,
  `aspek6` varchar(200) NOT NULL,
  `aspek7` varchar(200) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `id_inter` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_inter`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `exit_inter`
--

INSERT INTO `exit_inter` (`nama_karyawan`, `jabatan_terakhir`, `departemen`, `no_karyawan`, `date_in`, `date_out`, `q1`, `q2`, `q3`, `aspek1`, `aspek2`, `aspek3`, `aspek4`, `aspek5`, `aspek6`, `aspek7`, `comment`, `id_inter`) VALUES
('Mark', 'GM', 'GM', 1, '2002-02-02', '2018-12-08', 'great', 'great', 'great', 'great', 'great', 'great', 'great', 'great', 'great', 'great', 'great and improve more', 9),
('Jaja', 'OB', 'GA', 444, '2011-12-22', '2018-02-11', 'gaji', 'asik', 'dapat pekerjaan', 'baik sekali', 'baik', 'baik', 'baik', 'Cukup', 'cukup', 'baik', 'Tingkatkan terus', 8);

-- --------------------------------------------------------

--
-- Table structure for table `human_error`
--

CREATE TABLE IF NOT EXISTS `human_error` (
  `error_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `type_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `file` blob NOT NULL,
  `status_id` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`error_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `human_error`
--

INSERT INTO `human_error` (`error_id`, `email`, `type_id`, `category_id`, `title`, `message`, `file`, `status_id`, `timestamp`) VALUES
(2, 'admin@helpdesk.com', 3, 26, 'KPI dari atasan tdk turun ke bawahan', '\\"Dear Kak Sisil,\r\n Kak gimana ya terkait IPP Karyawan yang telah diapprove atasan, dan setelah itu dilakukan revisi oleh Atasan,\r\n Kenapa tidak update ke IPP akun karyawannya?\r\n Mohon bantuannya,,\r\n \\"\r\n', '', 2, '2018-07-02 15:00:14'),
(3, 'admin@helpdesk.com', 3, 0, 'Reminder Expired Balance', '\\"Dear Bercasupport dan Pak Adi,\r\n \r\nSaya forward reminder Cuti Besar yang masih salah. Saya capture Balance Cuti dibawah yah.\r\nMohon perbaikannya.\r\n \r\nTerima kasih atas bantuan dan kerjasamanya.\r\n \\"\r\n', '', 2, '2018-07-02 15:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `incident_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `type_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `file` blob NOT NULL,
  `status_id` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`incident_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`incident_id`, `email`, `type_id`, `category_id`, `title`, `message`, `file`, `status_id`, `timestamp`) VALUES
(2, 'admin@gmail.com', 1, 7, 'Performance Management (Export dan Print)', 'Ingin menanyakan terkait Performance Management, kenapa fungsi export dan print tidak berfungsi setelah diklik ya,\nMohon bantuannya,,', '', 2, '2018-07-09 09:00:03'),
(3, 'admin@gmail.com', 1, 21, 'Error approval adjustment', 'email adjustment cuti pak bima diskip,\nPerbaikan ini sepertinya menimbulakan issue baru, pengajuan Adjust Balance atas nama Herlan Iskandar sudah diajukan, tapi malahan hilang dari Approver. Tks', '', 2, '2018-07-09 08:57:18'),
(4, 'admin@gmail.com', 1, 2, 'Report BPJS Ketenagakerjaan', 'Mohon konfirmasinya mengenai report BPJS Ketenagakerjaan, bagi yang memiliki employee record 2 malah muncul di kedua pt pembebanan mereka', '', 2, '2018-07-09 08:57:45'),
(5, 'admin@gmail.com', 1, 7, 'Complete Self Evaluation', 'Berikut screenshootan setelah Marta Sundari mengklik complete, maka tampilan berubh sbb y apak', '', 2, '2018-07-09 08:58:42'),
(6, 'admin@gmail.com', 1, 23, 'Approval Performance Management', 'Ingin mengkonfirmasikan terkait Performance Management,\nPada Awal tahun, document performance kami setting approval (Manager Selection Method) By Repost To Position Mgr Level),\n \nNamun kenapa untuk kasus ini, karyawan a.n Ridho Tejo langsung ke Pak Suindra, \nPadahal di history Job data Bapak Ridho, tidak pernah ke Pak Suindra namun ke level dept Head\n \nTapi kenapa Pak Ridho approval nya bisa langsung ke GM ya?\n \nMohon bantuannya terkait permasalahan ini,', '', 2, '2018-07-09 08:59:51'),
(7, 'admin@gmail.com', 1, 21, 'error saat approval HCIS utk IPP ', 'error saat approval HCIS utk IPP ', '', 2, '2018-07-09 09:00:15'),
(8, 'admin@gmail.com', 1, 22, 'RE: tes cek pajak', 'Bahwa karyawan mengalami perubahan pemotongan pajak setiap bulannyan  karena menghitung kembali dapat kami pahami.\n\nContoh 1  dapat dijelaskan adanya penurunan THP karena pengembalian pajak Irreguler.\nConto 2 juga demikian, namun berdasarkan tes cek menggunakan templete yang sama ada selisih, perhitungan antara hasil di Peoplesoft dengan excel.\n', '', 2, '2018-07-09 09:00:28'),
(9, 'admin@gmail.com', 1, 23, 'Re: Reminder Pending PCN Request', 'Mbak Arum untuk data tersebut sudah saya rapikan..next harusnya sudah tidak terkirim remindernya.\nnamun masih ada 3 transaksi yang musti di cek dulu..\n00002466    3/6/2018\n00002265    5/4/2018\n00001714    4/28/2018\nTransaksi terbut akan dirubah menjadi Deny atau Approve?? karena di job data masih aktif.\n', '', 2, '2018-07-09 09:00:40'),
(10, 'admin@gmail.com', 1, 21, 'RE: Approval Performance Management', 'kenapa untuk kasus ini, karyawan a.n Ridho Tejo langsung ke Pak Suindra, \nPadahal di history Job data Bapak Ridho, tidak pernah ke Pak Suindra namun ke level dept Head\n', '', 2, '2018-07-09 09:00:56'),
(11, 'admin@gmail.com', 1, 21, 'error saat approval HCIS utk IPP', 'Ini ada error sewaktu saya approve karena apa ya?', '', 2, '2018-07-09 09:01:11'),
(12, 'admin@gmail.com', 1, 21, 'Approval Adjusment Balance ', 'Untuk approval dari admin, jika ada request akan lari keatasan kan yaa.\nTapi case yang ini tidak muncul, minta di cek apakah akibat dari roles atau bagaimana ?\n', '', 2, '2018-07-09 09:06:17'),
(13, 'admin@gmail.com', 1, 23, 'Email To ke Karyawan Keluar', 'Ini yang kemaren saya cerita, ada sender dari HCIS yang TO nya ke karyawan terminate.', '', 2, '2018-07-09 09:06:29'),
(14, 'admin@gmail.com', 1, 9, 'Case Payroll Employee ID 00002460 & 00001770', 'Terkait case karyawan dengan NIK  00002460 & 00001770 yang gaji nya menjadi 110 % setelah kami cek ternyata data schedule kerja kedua karyawan tersebut ada perubahan di tanggal 16 April 2018 ', '', 2, '2018-07-09 09:06:40'),
(15, 'admin@gmail.com', 1, 23, 'Company Directorate Org Chart tidak update', 'Menurut saya case seperti ini jika dilihat list yang sudah terproses, terlihat bahawa itu dijalankan by JOB.', '', 2, '2018-07-09 09:07:07'),
(16, 'admin@gmail.com', 1, 1, 'Alias email dari Peoplesoft', 'Kalau saya test dari akun email, huruf sendernya besar semua ?HCIS?.\nMungkin harus dicek di PSnya kenapa jadi kecil\n', '', 2, '2018-07-09 09:07:16'),
(17, 'admin@gmail.com', 1, 2, 'Medical claim karyawan', 'Mohon bantuannya untuk benefit RJ a.n Ryan Harry tidak muncul :', '', 2, '2018-07-09 09:06:52'),
(18, 'admin@gmail.com', 1, 4, 'FW: status time correction pending', 'Banyak time correction yang sudah selesai approve, tidak berubah ke transaksinya.\nStatus masih Pending dan proses approval sudah selesai.\n', '', 2, '2018-07-09 09:07:28'),
(19, 'admin@gmail.com', 1, 23, 'List Problem PS', 'Di menu Search Company Directory, Karyawan atas nama Cassandra Heriputri tidak ada / tidak dapat ditemukan', '', 2, '2018-07-09 09:07:40'),
(20, 'admin@gmail.com', 1, 7, 'List Problem PS', 'Pada masa pengisian Evaluation apa fungsi Notify dan Complete. Dan kenapa pada saat diklik Complete muncul warning padahal sudah melakukan pengisisan keseluruhannya.', '', 2, '2018-07-09 09:08:36'),
(21, 'admin@gmail.com', 1, 4, 'Attendance view untuk cuti di holiday', 'Dilaporan view Attandance absensi karyawan ada, tetapi di HCIS belum ada ya, mohon dibantu ya\n', '', 2, '2018-07-09 09:08:55'),
(22, 'admin@gmail.com', 1, 7, 'RE: Dokument Performance Double<1096> ', 'Kenapa ada dokumen performance beberapa karaywan ada dua ya, ', '', 2, '2018-07-09 09:09:13'),
(23, 'admin@gmail.com', 1, 24, 'Report Compare Gaji dan BPJS Kesehatan', 'Dear Tim Berca,\nMohon bantuannya untuk dapat melakukan follow up report :\n1.       Compare Gaji\n2.       BPJS Kesehatan\nUntuk koreksi data terlampir, Mohon untuk dapat diperbaiki.', '', 2, '2018-07-09 09:09:27'),
(24, 'admin@gmail.com', 1, 21, ' Email Reminder', 'Dear Pak Adi,\n \nIni masih muncul terus boleh dicek ? sudah saya email juga sebelumnya.\nBu Arum dan Bu Agnes, apakah transaksi ini sudah selesai ?', '', 2, '2018-07-09 09:09:55'),
(25, 'admin@gmail.com', 1, 4, 'Absence Sync', 'Dears,\n \nSudah saya jalankan beberapa kali sesuai arahan, tapi belum bisa update ke Admin View Time :\nAda yang terlewat stepnya atau bagaimana ya. \n \nSaya capeture juga query dari table absen TAP.\nTks.\n ', '', 2, '2018-07-09 09:10:10'),
(26, 'admin@gmail.com', 1, 21, 'Confirm untuk Prastowo Sundoro (Approver 2)', 'Pak Rohadi,\n \nIni kenapa bisa gini ya. padahal approvernya sudah resign, harusnya dia merujuk ke jabatan yang masih ada incumbentnya alias ke atasnya lagi\n \nTq\nSindy', '', 2, '2018-07-09 09:10:23'),
(36, 'admin@helpdesk.com', 1, 23, 'Balance cuti tahunan', 'Dear Pak Kris,\r\n\r\nMohon infonya untuk balance cuti tahunan sepertinya error.\r\n\r\nKarena terakhir ketika cuti saya yang per 11-15 mei diapprove sisa balance adalah 8 dan tanggal 23 mei diapprove seharusnya sisa balance adalah 7. Tapi didisplay menu masih 11.\r\n\r\nTerima kasih\r\n', '', 2, '2018-07-11 10:16:42'),
(28, 'admin@gmail.com', 1, 24, 'Crosscek Employee Summ Report', 'Dear Berca,\n \nTolong diricek ulang, hasil keluaran Laporan Employee Summary untuk karyawan2 yang masuk diatas tanggal 16 Mei 2018 tidak ada.\nTetapi di Job data ada, issuenya minta tolong di trace yaa. Terima kasih.', '', 2, '2018-07-09 09:10:34'),
(34, 'admin@helpdesk.com', 1, 1, 'Tidak dapat Login ke HCIS ', 'Dear IT HelpDesk\r\nTerkait pengisian IPP site, terdapat beberapa karyawan yang tidak bisa login HCIS, nama2 nya sbb :\r\n1. Muhammad Arif\r\n2. Feri Hermanto Lintong\r\n3. Rahmat\r\n4. Ariyanto\r\n5. Listyan Purwoko\r\n6. Martinus Hade\r\n\r\nMohon bantuannya\r\nRegards\r\n\r\n', '', 2, '2018-07-11 10:17:02'),
(35, 'admin@helpdesk.com', 1, 1, 'TIDAK BISA LOGIN DI HCIS', 'Dear Tim Helpdesk.\r\n\r\nsaya masih tidak bisa login di HCIS.\r\nsaya sudah pakai email dan password email TAP juga tidak bisa login.\r\nmohon bantuannya pak/bu agar saya bisa login di HCIS.\r\nterimakasih\r\n\r\n\r\n', '', 2, '2018-07-11 10:16:50'),
(31, 'admin@gmail.com', 1, 21, 'Ganti Approval', 'Dear all,\n \nBerikut adalah case permit yang masih mengacu pada atasan yang sudah resign (yang seharusnya sudah mengacu pada atasan dari si karyawan resign)\n \nUntuk case ini mohon dapat di solve secepatnya ya. Karena ini berhubungan dengan daily operasional karyawan. User akan selalu complain mengenai hal ini, padahal secara settingan di sistem kami sudah benar dan sesuai.\nPlease concernnya\n \nTq\nSindy', '', 2, '2018-07-09 09:11:06'),
(37, 'admin@helpdesk.com', 1, 1, 'tidak bisa login ke akun HCIS', 'Dear tim IT \r\n\r\nmohon bantuannya untuk di cekkan email berikut\r\n1. Morris.sebayang@tap-agri.com\r\n2. Shinta.alfianty@tap-agri.co.id\r\n3. aswin.praditya@tap-agri.com\r\n\r\ntidak bisa login ke akun HCIS.\r\n\r\nTerima kasih\r\n\r\nsalam\r\nShinta\r\n', '', 2, '2018-07-11 10:16:32'),
(38, 'admin@helpdesk.com', 1, 2, 'Medical Balance', 'Dear Pak Kris,\r\nMohon konfirmasinya untuk medical claim saya, balance Rp. 2.764.824 ,\r\nTetapi ketika saya mau input, balance nya hanya tersisa Rp. 264.824, \r\nMohon bantuannya.\r\nTerima kasih\r\n \r\nRegards,\r\nSelvy Oktafiani\r\nFinance\r\n', '', 2, '2018-07-11 10:15:18'),
(39, 'admin@helpdesk.com', 1, 7, 'Performance Document', 'Dear Pak Nono\r\n\r\nMinta bantuan ya pak? saat saya sudah masuk menu ini kan dalam panduan ada diminta Klik Add Goal setelah saya cari gak ada, ada dimana tombol tersebut ya?\r\n\r\nMohon info ya pak?\r\n\r\nTerima kasih\r\n\r\nSalam\r\nJuliana\r\n\r\n', '', 2, '2018-07-11 10:15:08'),
(40, 'admin@helpdesk.com', 1, 1, 'User Login Irawan', 'Dear All,\r\n\r\nMohon bantuannya karena hingga saat ini SPD Irawan belum bisa diakses.\r\nSedangkan yang bersangkutan sudah berangkat dinas ke Kaltim.\r\nApabila hingga hari ini spd belum bisa diakses kami takutkan spd tersebut harus dibuat secara manual dan dianggap sebagai back date.\r\n\r\nEmail yang benar : irawan.surdani@tap-agri.com\r\n\r\nRegards,\r\nYanuar Adrian Bomantara\r\n', '', 2, '2018-07-11 10:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `mpe`
--

CREATE TABLE IF NOT EXISTS `mpe` (
  `NIK` varchar(25) NOT NULL,
  `empl_name` varchar(255) NOT NULL,
  `NIK_atasan` varchar(25) NOT NULL,
  `superior_Name` varchar(255) NOT NULL,
  `service_Date` date NOT NULL,
  `hire_Date` date NOT NULL,
  `length_Service` varchar(255) NOT NULL,
  `position` varchar(25) NOT NULL,
  `position_desc` varchar(255) NOT NULL,
  `start_Position` date NOT NULL,
  `length_Position` varchar(255) NOT NULL,
  `job_code` varchar(25) NOT NULL,
  `job_code_desc` varchar(255) NOT NULL,
  `length_job_code` varchar(100) NOT NULL,
  `mgr_lvl` varchar(5) NOT NULL,
  `mgrLv_desc` varchar(100) NOT NULL,
  `dept_ID` varchar(10) NOT NULL,
  `dept_Desc` varchar(100) NOT NULL,
  `division` varchar(25) NOT NULL,
  `division_desc` varchar(100) NOT NULL,
  `directorate` varchar(25) NOT NULL,
  `directorat_desc` varchar(100) NOT NULL,
  `location` varchar(10) NOT NULL,
  `location_desc` varchar(100) NOT NULL,
  `regional` varchar(10) NOT NULL,
  `bis_unit` varchar(25) NOT NULL,
  `bis_unit_desc` varchar(100) NOT NULL,
  `empl_class` varchar(25) NOT NULL,
  `empl_class_description` varchar(100) NOT NULL,
  `cost_center` varchar(25) NOT NULL,
  `cost_center_desc` varchar(100) NOT NULL,
  `salary_plan` varchar(25) NOT NULL,
  `person_grade` varchar(25) NOT NULL,
  `start_Grade` date NOT NULL,
  `length_Grade` varchar(100) NOT NULL,
  `mt_flag` varchar(5) NOT NULL,
  `bis_area` varchar(25) NOT NULL,
  `bis_area_desc` varchar(100) NOT NULL,
  `acting` varchar(5) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `marital_status` varchar(5) NOT NULL,
  `religion` varchar(5) NOT NULL,
  `religion_desc` varchar(50) NOT NULL,
  `NID` varchar(50) NOT NULL,
  `tax_office_id` varchar(50) NOT NULL,
  `tax_status` varchar(50) NOT NULL,
  `contract_begin` date NOT NULL,
  `contract_end` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `age` varchar(5) NOT NULL,
  `employee_Afdeling` varchar(25) NOT NULL,
  `month` varchar(25) NOT NULL,
  `create_Date` date NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpe`
--


-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `type_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `file` blob NOT NULL,
  `status_id` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `email`, `type_id`, `category_id`, `title`, `message`, `file`, `status_id`, `timestamp`) VALUES
(13, 'user4@tap.com', 2, 1, 'Reset password login HCIS', 'Dear Tim\r\n\r\nTolong dibntu reset paswrd berikut ini y Pak\r\n\r\nsupaya asisten terlampir bisa login ke h', '', 2, '2018-06-21 16:36:53'),
(12, 'user4@tap.com', 2, 8, 'Perubahan Jabatan', 'Dear Team\r\n\r\nBerikut terlampir nama-nama user yang ada perubahan jabatan :\r\n\r\n1.	NAMA               ', '', 2, '2018-06-12 10:29:35'),
(11, 'user4@tap.com', 2, 8, 'PERUBAHAN STATUS KARYAWAN TETAP MARET 2017 ', 'Dear Team IT Helpdesk, \r\n\r\nMohon bantuannya team terdapat dua orang karyawan KSA3 yang akan diubah s', '', 2, '2018-06-12 10:26:25'),
(14, 'user4@tap.com', 2, 1, 'Request Rubah Foto pada HCIS ', 'Dear Team Helpdesk\r\n\r\nMohon bantuannya untuk rubahkan foto pada HCIS untuk user Budiansyah Nasution,', '', 2, '2018-06-12 11:35:46'),
(15, 'user4@tap.com', 2, 8, 'update perubahan jabatan', 'Dear pak Teguh,\r\n\r\nMohon bantuannya untuk update perubahan jabatan ini di system HRIS karena informa', '', 2, '2018-06-12 11:40:18'),
(19, 'hcis@tap.com', 2, 7, 'Testing 3', 'Testing 3', '', 1, '2018-06-21 16:51:26'),
(18, 'hcis@tap.com', 2, 11, 'Testing 2', 'Testing 2', '', 1, '2018-06-21 16:46:38'),
(56, 'admin@helpdesk.com', 2, 5, 'Request untuk mengubah data Company', 'Dear Pak Teguh,\r\n\r\nMohon bantuannya untuk mengubah data Company atas nama karyawan Charles Simon karena saat ini Company nya SAW yang seharusnya SAWA, mengingat case ini sama pada saat Company user FLTI.\r\n\r\nTerima Kasih,\r\nNicholas Budihardja\r\n', '', 2, '2018-07-11 09:21:03'),
(24, 'admin@gmail.com', 2, 26, 'Perubahan setting Coaching & Counseling (C&C)', 'Untuk poin 1,2 dan 3 dapat kami bantu ubah konfigurasinya. Tetapi kami mohon bantuan dari tim Talent untuk melakukan testing di development terlebih dulu sebelum kita lakukan perubahan di production.\nTerkait poin 4 kami limpahkan ke berca support karena termasuk permintaan baru dan pengerjaan report ini memerlukan effort dan waktu yang lebih banyak.', '', 2, '2018-07-09 09:14:38'),
(25, 'admin@gmail.com', 2, 26, 'FW: Template Report', 'Terkait dengan report Performance Management, dibuta jadi 2 report yaitu :\n1. Report Performance dengan bentuk per item-item Goal \n2. Report Performance yang hanya menunjukkan status tanpa menambahkan setiap item Goal nya,\n', '', 2, '2018-07-09 09:14:53'),
(26, 'admin@gmail.com', 2, 26, 'Perubahan label Coaching & Counseling', 'mohon bantuannya untuk mengubah label pada form Coaching & Counseling di peoplesoft ya:', '', 2, '2018-07-09 09:15:51'),
(27, 'admin@gmail.com', 2, 23, 'FW: Reminder Expected Job End Date', 'Terlampir issue yang sama, pengulangan / data redundan untuk remindernya. Tks.\nAdapun feedback nya agar ditambahkan lokasi kerja, nama PT, Manageral level, Buss Unit, Expected End Date dan Hire Date. \n', '', 2, '2018-07-09 09:16:09'),
(28, 'admin@gmail.com', 2, 23, '[Feedback] Report In - Out', 'Untuk Report nya sudah OK, namun field yang lainnya agar lebih maksimal digunakan bisa mengikuti Report yang ada di WA >> ?Hire Data? atau ?Resign Data? yang sudah dibuat Pak Adi.', '', 2, '2018-07-09 09:16:19'),
(29, 'admin@gmail.com', 2, 21, 'RE: Approval IPP ', 'Jika akan melakukan perombakan mohon dibantu menggunakan langsung yang Option 1 saja..\nMenggunakan 2 level semua..\nOption 1   Define Criteria (IPP) Mid Year Evaluation Final Year Evaluation\n Approval 1 Reports to Reports to Reports to\n Approval 2 Atasan Reports to Atasan Reports to Atasan Reports to\n\n', '', 2, '2018-07-09 09:16:33'),
(30, 'admin@gmail.com', 2, 22, 'FW: Template Perhitungan Pajak. ', 'Boleh minta tolong beberapa hal :\n\n1. Untuk perhitungan pajak yang pernah mbak nana kirim sebelumnya, bagaimana cara pengisiannya yah? Karena ada yang terumus tapi tidak terhitung\n2. Perhitungan ini apakah bisa digunakan untuk karyawan mutasi kpp?\n', '', 2, '2018-07-09 09:16:46'),
(31, 'admin@gmail.com', 2, 23, 'Reminder Feedback ', 'Terkait email reminder, ada sedikit masukan :\n\n1.       Seperti biasa untuk list yang ada harus ditambahkan, Location bekerja, Bis Unit, BA , PT. Agar info yang diberikan terasa manfaatnya untuk user\n2.       Masih ada record yang double di expected Job end date.\n', '', 2, '2018-07-09 09:16:59'),
(32, 'admin@gmail.com', 2, 5, 'Profile karyawan & Education Employee', 'Sesuai informasi yang saya sampaikan sebelumnya di menu repor( personal report) mohon untuk bisa ditambahkan data pendidikan terakhir dimana dan periodenya, pengalaman kerja juga ya, Bberikut cotoh yang kita minta.\nAtas suportnya kami ucapkan terima kasih.\n', '', 2, '2018-07-09 09:17:11'),
(33, 'admin@gmail.com', 2, 7, 'RE: Perubahan Setting Pada Person Profile Bagian P', 'Dear Mba Sisil,\nSesuai pembicaraan sebelumnya, mohon bantuannya untuk perubahan setting pada person profile bagian project: dimana pengisi project adalah atasan minimal level manager/department head.\n', '', 2, '2018-07-09 09:17:23'),
(34, 'admin@gmail.com', 2, 26, 'List Problem PS', 'Terkait dokumen IPP yang? telah diapprove, bagaimana jika melakukan revisi kembali terkait IPP yang sudah di approve ', '', 2, '2018-07-09 09:17:58'),
(35, 'admin@gmail.com', 2, 23, 'List Problem PS', 'Terkait User Manual, agar ditambahkan yang tidak ada diuser manual sebelumnya spt :\na.?????? Security/ Refresh departemen baru\nb.????? Document Performance Group', '', 2, '2018-07-09 09:18:13'),
(36, 'admin@gmail.com', 2, 24, 'Proses Penggajian Karyawan ', 'Dear Tim Berca Support,\n \nKami sedang melakukan calculate gaji Mei 2018 a.n Herlan Iskandar (00000348), namun ada beberapa hal yang ingin saya tanyakan :\n1.       Saya sudah melakukan terminasi untuk karyawan efektif 23 Mei 2018, namun gajinya tidak terprorate\n2.       Saya sudah melakukan penginputan untuk THR a.n karyawan tersebut, namun setelah di cek pajak irregulernya masih negative, mohon informasinya, mengingat secara gaji ybs terbayar full\n ', '', 2, '2018-07-09 09:18:23'),
(55, 'admin@helpdesk.com', 2, 13, 'Request Rubah Foto pada HCIS', 'Dear Team Helpdesk\r\n\r\nMohon bantuannya untuk rubahkan foto pada HCIS untuk user Budiansyah Nasution, Jabatan Kepala Kebun 1 PT. SLE, karena di HCIS pada login budiansyah.nasution@tap-agri.co.id, foto Profile nya terpasang foto FX. Budhi Prasetyo, jabatan Kepala Tekhnik Infrastruktur.\r\nBerikut terlampir img tersebut yang dimaksut.\r\n\r\nTks\r\nRgrds\r\nIT Site\r\n', '', 2, '2018-07-11 09:20:54'),
(57, 'admin@helpdesk.com', 2, 1, 'blm terdaftar di HCIS ', 'Dear All,\r\nmohon dapat didaftarkan untuk HCIS Kepala. Teknik Bp. Yun Sapta Pintaka.\r\nemail Bp. Yun Sapta Pintaka ( yun.sapta@tap-agri.com ). karena Beliau belum bisa login di HCIS\r\n\r\nTerima kasih\r\n', '', 2, '2018-07-11 10:14:22'),
(58, 'admin@helpdesk.com', 2, 1, 'tidak dapat login ke HCIS', 'Dear TAP Helpdesk\r\nBerdasarkan Informasi, nama asisten PT. AAPA site berikut belum bisa mengisi IPP, karena tidak dapat login ke HCIS dengan Pasword yang standar :\r\n\r\n1.	Rendi Setiawan\r\n2.	Yuri Wilarno\r\n3.	Rahmat Ali Siregar\r\n\r\nMohon bantuannya \r\n\r\nRegards, \r\nNono Prastowo\r\nOD Department\r\n', '', 2, '2018-07-11 10:14:33'),
(59, 'admin@helpdesk.com', 2, 1, 'Permohonan login HCIS Staf Site', 'Dear TAP Helpdesk\r\nBerdasarkan Informasi, nama Staf site sebagai berikut belum bisa mengisi IPP, karena tidak dapat login ke HCIS :\r\n\r\nRIVALDI MANDALA PUTRA\r\nM. IDWAN KASWIN MOENTHE\r\nAKMAL ALDY\r\nMARUAHAL ANDRIANO SIAHAAN\r\nTIMSON TAMBUNAN\r\nHARYANTO .\r\nPARIYANTO .\r\nINDRA WAHYUDI D\r\nJORALES JORALES\r\nJUSHI DWITRA VALDI SARAGIH\r\nHENDI .\r\nTONNY FIRMANSYAH\r\nSUTAN ASHARI DAULAY\r\nWENDI RAMDIKA\r\nERDI KRISTIANTO LUMBAN TOBING\r\nNUR TRIYONO\r\nSUGITO .\r\n\r\nMohon bantuan nya agar nama2 tersebut dapat login ke HCIS\r\nSebelumnya saya ucapkan terimakasih\r\n\r\n\r\nRegards, \r\nNono Prastowo\r\nPayroll Department\r\nHuman Capital Directorate\r\n', '', 2, '2018-07-11 10:14:42'),
(60, 'admin@helpdesk.com', 2, 1, 'Permohonan Reset HCIS Asisten PT. AAPA Site', '\r\nDear TAP Helpdesk\r\nBerdasarkan Informasi, nama asisten PT. AAPA site berikut belum bisa mengisi IPP, karena tidak dapat login ke HCIS dengan Pasword yang standar :\r\n\r\n1. Muhammad Arif\r\n2. Feri Hermanto Lintong\r\n3. Rahmat\r\n4. Ariyanto\r\n5. Listyan Purwoko\r\n6. Martinus Hade\r\n\r\nMohon bantuannya \r\n\r\nRegards, \r\nNono Prastowo\r\nOD Department\r\nHuman Capital Directorate\r\n \r\n', '', 2, '2018-07-11 10:14:52'),
(61, 'admin@helpdesk.com', 2, 1, 'Permohonan Reset HCIS Asisten Site', '\r\nDear TAP Helpdesk\r\nBerdasarkan Informasi, nama Staf site sebagai berikut belum bisa mengisi IPP, karena tidak dapat login ke HCIS dengan Pasword yang standar :\r\ntry.salim@tap-agri.co.id\r\narie.purniawan@tap-agri.co.id\r\nheri.faisal@tap-agri.com\r\nleroy.rumahorbo@tap-agri.co.id\r\nfadel.fachrian@tap-agri.co.id\r\nrendi.setiawan@tap-agri.co.id\r\nyuri.wilarno@tap-agri.co.id\r\nrahmat.siregar@tap-agri.co.id\r\neko.budiono@tap-agri.co.id\r\n\r\nMohon bantuannya \r\n\r\nRegards, \r\nNono Prastowo\r\nPayroll Department\r\nHuman Capital Directorate\r\n', '', 2, '2018-07-11 10:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `playerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT '0',
  PRIMARY KEY (`playerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`playerid`, `score`) VALUES
(1, 10),
(2, 40),
(3, 20),
(4, 9),
(5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(0, 'None'),
(1, 'In Progress'),
(2, 'Solved');

-- --------------------------------------------------------

--
-- Table structure for table `turnover_try`
--

CREATE TABLE IF NOT EXISTS `turnover_try` (
  `nik_terminate` int(8) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `biz_unit` varchar(15) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nik_terminate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turnover_try`
--

INSERT INTO `turnover_try` (`nik_terminate`, `employee_name`, `biz_unit`, `reason`, `date`) VALUES
(12345678, 'Abcde Fghjkl', 'HO Jakarta', 'Family reason', '2018-05-24'),
(12234567, 'Qwerty Uiop', 'Site Estate', 'Family reason', '2018-05-24'),
(12334567, 'Zxcvb Nmasd', 'Site Mill', 'Family Reason', '2018-05-24'),
(11234567, 'Aaaaa cacacaca', 'Site Estate', 'Family reason', '2018-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `turn_over`
--

CREATE TABLE IF NOT EXISTS `turn_over` (
  `nik_terminate` int(8) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `effective_date` datetime NOT NULL,
  `action` varchar(15) NOT NULL,
  `reason` varchar(25) NOT NULL,
  `reason_desc` varchar(50) NOT NULL,
  `nik_head` int(8) NOT NULL,
  `superior_name` varchar(50) NOT NULL,
  `service_date` datetime NOT NULL,
  `start_date` datetime NOT NULL,
  `service_length` varchar(25) NOT NULL,
  `position` varchar(8) NOT NULL,
  `position_desc` varchar(50) NOT NULL,
  `start_position` datetime NOT NULL,
  `position_length` varchar(25) NOT NULL,
  `job_code` varchar(8) NOT NULL,
  `job_code_length` varchar(25) NOT NULL,
  `mgr_level` int(2) NOT NULL,
  `mgr_level_desc` varchar(25) NOT NULL,
  `department` varchar(8) NOT NULL,
  `department_desc` varchar(50) NOT NULL,
  `division` varchar(8) NOT NULL,
  `division_desc` varchar(50) NOT NULL,
  `directorat` varchar(8) NOT NULL,
  `directorat_desc` varchar(50) NOT NULL,
  `location` varchar(8) NOT NULL,
  `location_desc` varchar(50) NOT NULL,
  `regional` varchar(15) NOT NULL,
  `business_unit` varchar(5) NOT NULL,
  `bu_desc` varchar(15) NOT NULL,
  `emp_class` varchar(5) NOT NULL,
  `emp_class_desc` varchar(15) NOT NULL,
  `cost_center` varchar(3) NOT NULL,
  `cost_center_desc` varchar(25) NOT NULL,
  `salary_plan` varchar(5) NOT NULL,
  `person_grade` varchar(5) NOT NULL,
  `grade_start` datetime NOT NULL,
  `grade_length` varchar(25) NOT NULL,
  `mt_flag` varchar(2) NOT NULL,
  `business_area` varchar(5) NOT NULL,
  `ba_desc` varchar(25) NOT NULL,
  `action_ba` varchar(2) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `birthdate` date NOT NULL,
  `marital_status` varchar(2) NOT NULL,
  `religion` varchar(3) NOT NULL,
  `religion_desc` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `tax_office_id` int(20) NOT NULL,
  `status` varchar(5) NOT NULL,
  `contract_prob_begin` date NOT NULL,
  `contract_prob_end` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `emp_location` varchar(10) NOT NULL,
  `month_resign` varchar(10) NOT NULL,
  `year_resign` varchar(10) NOT NULL,
  `talent_flag` varchar(2) NOT NULL,
  PRIMARY KEY (`nik_terminate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turn_over`
--

INSERT INTO `turn_over` (`nik_terminate`, `employee_name`, `effective_date`, `action`, `reason`, `reason_desc`, `nik_head`, `superior_name`, `service_date`, `start_date`, `service_length`, `position`, `position_desc`, `start_position`, `position_length`, `job_code`, `job_code_length`, `mgr_level`, `mgr_level_desc`, `department`, `department_desc`, `division`, `division_desc`, `directorat`, `directorat_desc`, `location`, `location_desc`, `regional`, `business_unit`, `bu_desc`, `emp_class`, `emp_class_desc`, `cost_center`, `cost_center_desc`, `salary_plan`, `person_grade`, `grade_start`, `grade_length`, `mt_flag`, `business_area`, `ba_desc`, `action_ba`, `sex`, `birthdate`, `marital_status`, `religion`, `religion_desc`, `nid`, `tax_office_id`, `status`, `contract_prob_begin`, `contract_prob_end`, `email`, `phone`, `address`, `age`, `emp_location`, `month_resign`, `year_resign`, `talent_flag`) VALUES
(123, 'Abc', '0000-00-00 00:00:00', 'Y', 'Family', 'Fammmmmmm', 432, 'Zxc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 Months 2 Day', 'HCIS', 'HC Information', '0000-00-00 00:00:00', '3 Months 2 Day', 'HCIS', '3 Months 2 Day', 0, 'HCIS Staff', 'HC', 'Human Capital', 'IS & Pol', 'IS & Policy', 'TAP', 'TAP', 'HO', 'Head Office Jakarta', 'Jakarta', 'HC', 'Human Capital', 'Staff', 'Staff biasa', 'HC0', 'HC 00001', 'A01', 'A1', '0000-00-00 00:00:00', '3 Months 2 Day', 'Y', 'HO', 'Head Office', 'Y', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 1111, 11233, 'ABC', '0000-00-00', '0000-00-00', 'chandra@tap.com', '87878787878', 'Gunung Putri, Bogor', 21, 'HO Jakarta', 'Agustus', '2018', 'Y'),
(2749, 'I DEWA GEDE TJAHJADI, IR', '0000-00-00 00:00:00', 'Termination', 'End of Apprenticeship Con', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 14 DAY', 'P0000030', 'AGRONOMY QUALITY CONTROL SUB DEPT. HEAD', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 14 DAY', 'J00018', 'AGRONOMY QUALITY CONTROL ', 7, 'SUB DEPARTMENT HEAD', 'D00013', 'AGRONOMY QUALITY CONTROL DEPARTMENT', 'D00015', 'PLANTATION CONTROLLER DIVISION', 'D00012', 'ESTATE DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'CNT', 'Contract', 'AAP', 'PT. ANUGERAH AGUNG PRIMA ', 'NG', 'NG', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 14 DAY', 'N', '6411', 'AAP - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K2', '0000-00-00', '0000-00-00', 'gede.tjahjadi@tap-agri.co', '1', '1', 58, 'HO', 'Jan', '1', 'N'),
(2809, 'PRIMA PANCAN PUTRA SIPAYUNG', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 13 DAY', 'P0000387', 'KEPALA INFRASTRUKTUR', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 13 DAY', 'J00152', 'KEPALA INFRASTRUKTUR', 14, 'ASISTEN KEPALA', 'D00119', 'ESTATE - TEKNIK KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00013', 'DLJ1', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '4', '4A', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 13 DAY', 'N', '5721', 'DLJ - DLJ1', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 0, '1', '0000-00-00', '0000-00-00', '1', '82165503488', 'HUTA II EMPLASMENN DOLOK ILIRDOLOK TENERADOLOK BATU NANGGAR', 26, 'SITE', 'Jan', '1', 'N'),
(1516, 'DEDI GUNAWAN SARAGIH', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '6 YEAR 11 MONTH 22 DAY', 'P0000104', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '6 YEAR 11 MONTH 22 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00013', 'DLJ1', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '3', '3F', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 14 DAY', 'N', '5721', 'DLJ - DLJ1', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81392042242', 'HUTA II BANDAR PULO, HUBATU PERDAGANGAN, BANDAR', 31, 'SITE', 'Jan', '1', 'N'),
(1953, 'SUKMA EFENDY', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '-', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 1 MONTH 14 DAY', 'P0000714', 'STAFF LOGISTIK', '0000-00-00 00:00:00', '0 YEAR 6 MONTH 14 DAY', 'J00266', 'STAFF LOGISTIK', 13, 'ASISTEN', 'D00134', 'MILL - ADMINISTRATION KALTIM', 'D00066', 'MILL PRODUCTION CONTROL DIVISION', 'D00064', 'MILL DIRECTORATE', 'L00011', 'DLJ - MILL', 'KALTIM II', 'MILL', 'Site Mill', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '3', '3E', '0000-00-00 00:00:00', '0 YEAR 6 MONTH 14 DAY', 'N', '5741', 'DLJ - MILL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K3', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '82172801524', 'Aliantan RT 005/RW 002, Kel Aliantan, Kec Kabun, KabRokan Hulu', 40, 'SITE', 'Feb', '1', 'N'),
(2746, 'RIDUWAN .', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 8 MONTH 3 DAY', 'P0000731', 'MAINTENANCE ENGINEER', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 14 DAY', 'J00162', 'MAINTENANCE ENGINEER', 13, 'ASISTEN', 'D00137', 'MILL - OPERATION KALTIM III', 'D00066', 'MILL PRODUCTION CONTROL DIVISION', 'D00064', 'MILL DIRECTORATE', 'L00045', 'YWA - MILL', 'KALTIM III', 'MILL', 'Site Mill', 'PRO', 'Probation', 'YWA', 'PT. YUDHA WAHANA ABADI', '3', '3E', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 14 DAY', 'N', '6341', 'YWA - MILL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K2', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '81375880109', 'PKS PT GSIP RT 026/RW 006, KEL. PANDU SENJAYA, KEC.PANGKALAN BUN', 40, 'SITE', 'Feb', '1', 'N'),
(1728, 'HUBERT VIKTOR P. SIMANJORANG', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 10 MONTH 0 DAY', 'P0000155', 'ASISTEN SURVEY', '0000-00-00 00:00:00', '1 YEAR 9 MONTH 14 DAY', 'J00038', 'ASISTEN SURVEY', 13, 'ASISTEN', 'D00121', 'ESTATE - SUPPORT KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00014', 'DLJ2', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '4', '4B', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 14 DAY', 'N', '5722', 'DLJ - DLJ2', 'N', 'M', '0000-00-00', 'M', 'KTH', 'Katholik', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81250757476', 'JL. CIBADUYUT LAMA GANG BAPAK SARHAWI. KEL. KEBONLEGA,', 35, 'SITE', 'Feb', '1', 'Y'),
(2096, 'HEBRON TANDIALLO', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '7 YEAR 3 MONTH 14 DAY', 'P0000651', 'TRAINEE KTU', '0000-00-00 00:00:00', '1 YEAR 6 MONTH 14 DAY', 'J00286', 'TRAINEE KTU', 13, 'ASISTEN', 'D00134', 'MILL - ADMINISTRATION KALTIM', 'D00066', 'MILL PRODUCTION CONTROL DIVISION', 'D00064', 'MILL DIRECTORATE', 'L00011', 'DLJ - MILL', 'KALTIM II', 'MILL', 'Site Mill', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '3', '3E', '0000-00-00 00:00:00', '1 YEAR 8 MONTH 14 DAY', 'N', '5741', 'DLJ - MILL', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85331269634', 'Jl. ST Hasanudin No. 10 RT. 005 Kel. Singa GembaraKec. Sangatta Utara', 27, 'SITE', 'Feb', '1', 'N'),
(2195, 'FAKHRUR ROZY', '0000-00-00 00:00:00', 'Termination', 'Unsatisfactory Performanc', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 9 DAY', 'P0000418', 'MILL MANAGER', '0000-00-00 00:00:00', '1 YEAR 9 MONTH 14 DAY', 'J00173', 'MILL MANAGER', 15, 'MANAGER', 'D00133', 'MILL - OPERATION KALTIM', 'D00066', 'MILL PRODUCTION CONTROL DIVISION', 'D00064', 'MILL DIRECTORATE', 'L00033', 'SLE - MILL', 'KALTIM I', 'MILL', 'Site Mill', 'PRM', 'Permanent', 'MSL', 'PT. MUARATOYU SUBUR LESTA', '5', '5A', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 9 DAY', 'N', '5241', 'MSL - MILL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K3', '0000-00-00', '0000-00-00', 'fakhrur.rozy@tap-agri.com', '81278459176', 'KOMPLEK PURI ZAHARA 2 BLOK N NO. 23  KEL. SIMPANGSELAYANG  KEC. MEDAN TUNTUNGAN', 44, 'SITE', 'Feb', '1', 'N'),
(2762, 'SUHERMAN MARTOGI JAYA SIMANJUNTAK', '0000-00-00 00:00:00', 'Termination', 'Company - Probation Faile', 'Ybs tidak lulus masa percobaan di TMT Batch XLV', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 2 DAY', 'P0000293', 'FINANCE VERIFIKATOR SITE - KALTIM', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 2 DAY', 'J00112', 'FINANCE VERIFIKATOR SITE', 13, 'ASISTEN', 'D00120', 'ESTATE - ADMINISTRATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00015', 'EBL', 'KALTIM II', 'EST', 'Site Estate', 'PRO', 'Probation', 'EBL', 'PT. ETAM BERSAMA LESTARI', '3', '3E', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 2 DAY', 'Y', '5121', 'EBL - EBL', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 0, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '812/631-6308', 'LINGK VIII, KEL. PERDAGANGAN I, KEC. BANDAR', 24, 'SITE', 'Feb', '1', 'N'),
(2045, 'RUDY PRASETYA', '0000-00-00 00:00:00', 'Termination', 'Pension Payee Off', 'Pensiun', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 10 MONTH 14 DAY', 'P0000637', 'SUSTAINABILITY DIVISION HEAD', '0000-00-00 00:00:00', '2 YEAR 6 MONTH 14 DAY', 'J00274', 'SUSTAINABILITY DIVISION H', 4, 'DIVISION HEAD', 'D00104', 'SUST. & SMALLHOLDERS ENGAGEMENT DIVISION', 'D00104', 'SUST. & SMALLHOLDERS ENGAGEMENT DIVISION', 'D00110', 'TRADING & DOWNSTREAM DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'PRM', 'Permanent', 'EBL', 'PT. ETAM BERSAMA LESTARI', '5', '5D', '0000-00-00 00:00:00', '3 YEAR 10 MONTH 14 DAY', 'N', '5111', 'EBL - HO', 'N', 'M', '0000-00-00', 'M', 'PRT', 'Protestan', 2147483647, 2147483647, 'K3', '0000-00-00', '0000-00-00', 'rudy.prasetya@tap-agri.co', '82122008930', 'Kebagusan Besar RT 001/RW 005, Gg Mawar, KelKebagusan, Kec Pasar Minggu', 55, 'HO', 'Feb', '1', 'N'),
(1930, 'EVAN S. SIPAYUNG', '0000-00-00 00:00:00', 'Termination', 'Resignation-Other Positio', 'Mendapatkan pekerjaan di PTPN III - SUMUT', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 3 MONTH 9 DAY', 'P0000110', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '4 YEAR 3 MONTH 9 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00032', 'SLE', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'MSL', 'PT. MUARATOYU SUBUR LESTA', '4', '4A', '0000-00-00 00:00:00', '3 YEAR 0 MONTH 9 DAY', 'N', '5221', 'MSL - MSL', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '82160788846', 'JL. PARLUSAN NO.64 LUMBAN SIHITE, KEC. LAE PARIRA', 28, 'SITE', 'Feb', '1', 'N'),
(2279, 'ASDARUSMAN. ASDARUSMAN.', '0000-00-00 00:00:00', 'Termination', 'End of Fixed-Term Contrac', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 2 MONTH 14 DAY', 'P0000451', 'PROGRAM&PARTNERSHIP FINANCING DEPT HEAD', '0000-00-00 00:00:00', '3 YEAR 2 MONTH 14 DAY', 'J00206', 'PROGRAM&PARTNERSHIP FINAN', 6, 'DEPARTMENT HEAD', 'D00040', 'PROGRAM & PARTNERSHIP FINANCING DEPT.', 'D00039', 'FUNDING DIVISION', 'D00039', 'FUNDING DIVISION', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'CNT', 'Contract', 'MIK', 'PT. MEGA IKA KHANSA', '4', '4E', '0000-00-00 00:00:00', '3 YEAR 2 MONTH 14 DAY', 'N', '4211', 'MIK - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'asdarusman@tap-agri.com', '8129999165', 'JL. KUSUMA BARAT BLOK 2 C/13 RT 001 RW.017DUREN JAYABEKASI TIMUR', 56, 'HO', 'Feb', '1', 'N'),
(2674, 'WAHYUDI .', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena mendapat pekerjaan ba', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5 YEAR 10 MONTH 14 DAY', 'P0000114', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '0 YEAR 3 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00123', 'ESTATE - OPERATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00044', 'YWA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'YWA', 'PT. YUDHA WAHANA ABADI', '3', '3E', '0000-00-00 00:00:00', '5 YEAR 10 MONTH 14 DAY', 'N', '6321', 'YWA - YWA', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 0, 0, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '1', '1', 27, 'SITE', 'Mar', '1', 'N'),
(1140, 'MAULANA AHMAD', '0000-00-00 00:00:00', 'Termination', 'Relocation', 'Mutasi ke Group Triputra AMARA Periode 1 Maret 201', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5 YEAR 9 MONTH 12 DAY', 'P0000326', 'IT REGIONAL & HO SUPPORT SUB DEPT. HEAD', '0000-00-00 00:00:00', '4 YEAR 3 MONTH 14 DAY', 'J00142', 'IT REGIONAL & HO SUPPORT ', 7, 'SUB DEPARTMENT HEAD', 'D00058', 'IT SUPPORT DEPARTMENT', 'D00054', 'IT DIVISION', 'D00059', 'IT, SPC, BP DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'PRM', 'Permanent', 'GSM', 'PT. GAWI BAHANDEP SAWIT M', '4', '4E', '0000-00-00 00:00:00', '5 YEAR 9 MONTH 12 DAY', 'N', '4111', 'GSM - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'maulana.ahmad@tap-agri.co', '81316183530', 'Telaga Mas Duta Harapan Blok BA 3 No. 46, RT 004/016,Kel. Harapan Baru, Kec. Bekasi Utara', 37, 'HO', 'Mar', '1', 'N'),
(1966, 'MOHAMMAD SIDDIQ PERMANA', '0000-00-00 00:00:00', 'Termination', 'Health Reasons', 'Ybs mengundurkan diri karena kondisi pasca operasi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 1 MONTH 17 DAY', 'P0000120', 'ASISTEN LAPANGAN - LC', '0000-00-00 00:00:00', '2 YEAR 2 MONTH 14 DAY', 'J00032', 'ASISTEN LAPANGAN - LC', 13, 'ASISTEN', 'D00113', 'ESTATE - OPERATION KALTENG', 'D00077', 'REGION - KALTENG', 'D00068', 'OPERATION DIRECTORATE', 'L00043', 'TAN', 'KALTENG', 'EST', 'Site Estate', 'PRM', 'Permanent', 'TAN', 'PT. TRIEKA AGRO NUSANTARA', '4', '4A', '0000-00-00 00:00:00', '2 YEAR 10 MONTH 14 DAY', 'N', '4621', 'TAN - TAN', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '82367432729', 'Jl Hj Fatimah Gg Musholla LK V RT 005/RW 005, KelDamar Sari, Kec Padang Hilir', 26, 'SITE', 'Mar', '1', 'N'),
(2571, 'ANOM ANGGA SAPUTRA', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena melakukan tindakan as', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 9 DAY', 'P0000153', 'ASISTEN SURVEY', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 9 DAY', 'J00038', 'ASISTEN SURVEY', 13, 'ASISTEN', 'D00116', 'ESTATE - SUPPORT KALTENG', 'D00077', 'REGION - KALTENG', 'D00068', 'OPERATION DIRECTORATE', 'L00043', 'TAN', 'KALTENG', 'EST', 'Site Estate', 'PRM', 'Permanent', 'TAN', 'PT. TRIEKA AGRO NUSANTARA', '3', '3F', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 9 DAY', 'N', '4621', 'TAN - TAN', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '82293446285', 'DK SUKOREJO, RT. 005/ RW. 003,  KEL. SUKOREJO, KEC.TUNJUNGAN', 24, 'SITE', 'Mar', '1', 'N'),
(2713, 'SUYATO .', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 3 DAY', 'P0000114', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 3 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00123', 'ESTATE - OPERATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00044', 'YWA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'YWA', 'PT. YUDHA WAHANA ABADI', '3', '3E', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 3 DAY', 'N', '6321', 'YWA - YWA', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K1', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '85268203558', 'Tunggal jaya Rt. 001 /001, kelurahan Tunggal JayaKecamatan Teras Terunjam', 31, 'SITE', 'Mar', '1', 'N'),
(2776, 'ANDRI ANSYAH', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri dengan alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 6 DAY', 'P0000468', 'QUALITY CONTROL ENGINEER', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 6 DAY', 'J00218', 'QUALITY CONTROL ENGINEER', 13, 'ASISTEN', 'D00133', 'MILL - OPERATION KALTIM', 'D00066', 'MILL PRODUCTION CONTROL DIVISION', 'D00064', 'MILL DIRECTORATE', 'L00027', 'HPM - MILL', 'KALTIM I', 'MILL', 'Site Mill', 'PRM', 'Permanent', 'HPM', 'PT. HAMPARAN PERKASA MAND', '3', '3E', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 6 DAY', 'N', '5841', 'HPM - MILL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 0, 2147483647, 'K0', '0000-00-00', '0000-00-00', 'andri.ansyah@tap-agri.co.', '82366507334', 'JL. MANGAAN 8 LK 17, KEL. MABAR, KEC. MEDAN DELI', 31, 'SITE', 'Mar', '1', 'N'),
(2085, 'AGUS SUBROTO,STP', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs ingin fokus mendirikan usaha sendiri', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 9 MONTH 4 DAY', 'P0000338', 'KEPALA KEBUN', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 14 DAY', 'J00146', 'KEPALA KEBUN', 14, 'ASISTEN KEPALA', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00015', 'EBL', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'EBL', 'PT. ETAM BERSAMA LESTARI', '4', '4F', '0000-00-00 00:00:00', '3 YEAR 9 MONTH 4 DAY', 'N', '5121', 'EBL - EBL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K3', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85265219617', 'JL. SEI BABALAN NO 28. KEL. PUJJI DADI, KEC. BINJAISELATAN.', 40, 'SITE', 'Mar', '1', 'N'),
(1239, 'AHMAD NUR RIDO CAHYO W', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri dengan alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5 YEAR 7 MONTH 0 DAY', 'P0000033', 'AREA KTU - KALTIM', '0000-00-00 00:00:00', '1 YEAR 7 MONTH 14 DAY', 'J00298', 'AREA KTU', 15, 'MANAGER', 'D00120', 'ESTATE - ADMINISTRATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00041', 'SAWA', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'SAW', 'PT. SUBUR ABADI WANA AGUN', '4', '4C', '0000-00-00 00:00:00', '1 YEAR 7 MONTH 14 DAY', 'N', '5921', 'SAW - SAWA', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K3', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85347874900', 'JL. BLIMBING 2 NO. 50 PERUMNAS RT.003/RW.020. KEL.NGRINGO, KEC. JATEN', 41, 'SITE', 'Mar', '1', 'Y'),
(2511, 'LASMIANTO .', '0000-00-00 00:00:00', 'Termination', 'End of Fixed-Term Contrac', 'Kontrak ybs habis dan tidak diperpanjang lagi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1 YEAR 8 MONTH 1 DAY', 'P0000348', 'KEPALA SATPAM', '0000-00-00 00:00:00', '1 YEAR 8 MONTH 1 DAY', 'J00147', 'KEPALA SATPAM', 13, 'ASISTEN', 'D00131', 'ESTATE - SUPPORT SUMATERA', 'D00091', 'REGION - SUMATERA', 'D00068', 'OPERATION DIRECTORATE', 'L00006', 'BBB - INTI', 'SUMATERA', 'EST', 'Site Estate', 'CNT', 'Contract', 'BBB', 'PT. BRAHMA BINABAKTI', '3', '3F', '0000-00-00 00:00:00', '1 YEAR 8 MONTH 1 DAY', 'N', '2121', 'BBB - INTI', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '82114431175', 'KP. SUKABELA RT/RW : 001/001  KEL. KASEMEN, KEC.KASEMEN', 58, 'SITE', 'Mar', '1', 'N'),
(2421, 'AHMAD FAUZI', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 YEAR 8 MONTH 22 DAY', 'P0000054', 'ASISTEN BENGKEL', '0000-00-00 00:00:00', '1 YEAR 5 MONTH 13 DAY', 'J00021', 'ASISTEN BENGKEL', 13, 'ASISTEN', 'D00119', 'ESTATE - TEKNIK KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00015', 'EBL', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'EBL', 'PT. ETAM BERSAMA LESTARI', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 5 MONTH 14 DAY', 'N', '5121', 'EBL - EBL', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85362312020', 'Dusun VI Desa Bahsidua Dua, Kel Bah Sidua-dua, KecSerba Jadi, Kab Serdang Bedagai, Prov Sumatera Uta', 28, 'SITE', 'Mar', '1', 'N'),
(1950, 'ADRIANUS ADRIANUS', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 1 MONTH 14 DAY', 'P0000105', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '4 YEAR 1 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00014', 'DLJ2', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'DLJ', 'PT. DWIWIRA LESTARI JAYA', '4', '4A', '0000-00-00 00:00:00', '4 YEAR 1 MONTH 14 DAY', 'N', '5722', 'DLJ - DLJ2', 'N', 'M', '0000-00-00', 'M', 'KTH', 'Katholik', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81953406903', 'Dusun Sedowai RT 004/RW 002, Kel Maju Karya, KecParindu', 30, 'SITE', 'Mar', '1', 'N'),
(2853, 'GEMBONG KUSWANTORO', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', '1', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 1 MONTH 29 DAY', 'P0000348', 'KEPALA SATPAM', '0000-00-00 00:00:00', '0 YEAR 1 MONTH 29 DAY', 'J00147', 'KEPALA SATPAM', 13, 'ASISTEN', 'D00131', 'ESTATE - SUPPORT SUMATERA', 'D00091', 'REGION - SUMATERA', 'D00068', 'OPERATION DIRECTORATE', 'L00006', 'BBB - INTI', 'SUMATERA', 'EST', 'Site Estate', 'PRO', 'Probation', 'BBB', 'PT. BRAHMA BINABAKTI', '4', '4B', '0000-00-00 00:00:00', '0 YEAR 1 MONTH 29 DAY', 'N', '2121', 'BBB - INTI', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K0', '0000-00-00', '0000-00-00', '1', '85335189696', 'DUKUH RT 003/RW 002SUDIMOROTERAS', 45, 'SITE', 'Mar', '1', 'N'),
(2690, 'I KADEK WIDNYANA', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '13 YEAR 4 MONTH 14 DAY', 'P0000377', 'KEPALA TATA USAHA', '0000-00-00 00:00:00', '13 YEAR 4 MONTH 14 DAY', 'J00150', 'KEPALA TATA USAHA', 14, 'ASISTEN KEPALA', 'D00125', 'ESTATE - ADMINISTRATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00044', 'YWA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'YWA', 'PT. YUDHA WAHANA ABADI', '4', '4F', '0000-00-00 00:00:00', '13 YEAR 4 MONTH 14 DAY', 'N', '6321', 'YWA - YWA', 'N', 'M', '0000-00-00', 'M', 'HND', 'Hindu', 2147483647, 0, 'K3', '0000-00-00', '0000-00-00', 'kadek.widnyana@tap-agri.c', '1', 'JL.Poros pantai Lebih , Gg.Kepiting  No.1 Kel.LebihKelod, Kec. Gianyar', 42, 'SITE', 'Mar', '1', 'N'),
(2124, 'ANDI SUPANTA T', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5 YEAR 8 MONTH 1 DAY', 'P0000106', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '5 YEAR 8 MONTH 1 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00015', 'EBL', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'EBL', 'PT. ETAM BERSAMA LESTARI', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 14 DAY', 'N', '5121', 'EBL - EBL', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 0, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81257532360', 'JL. TAMBUN BUNGAL NO.11 KEL. LANGKAI, KEC. PAHANDOT', 32, 'SITE', 'Mar', '1', 'N'),
(1470, 'YUFRON KHARIS', '0000-00-00 00:00:00', 'Termination', 'Become Self-Employed', 'Mengundurkan diri untuk wiraswasta', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '6 YEAR 3 MONTH 21 DAY', 'P0000426', 'NETWORK & COMMUNICATION SECTION HEAD', '0000-00-00 00:00:00', '2 YEAR 7 MONTH 14 DAY', 'J00181', 'NETWORK & COMMUNICATION S', 8, 'SECTION HEAD', 'D00055', 'IT INFRASTRUCTURE DEPARTMENT', 'D00054', 'IT DIVISION', 'D00059', 'IT, SPC, BP DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'PRM', 'Permanent', 'EBL', 'PT. ETAM BERSAMA LESTARI', '4', '4A', '0000-00-00 00:00:00', '4 YEAR 2 MONTH 14 DAY', 'N', '5111', 'EBL - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'yufron.kharis@tap-agri.co', '81328588819', 'JL.DUKU I/ 44 PERUM KORPRI RT.05/ RW.10 KEL.KRAMATSELATAN, KEC.MAGELANG UTARA', 34, 'HO', 'Apr', '1', 'Y'),
(2741, 'ERWIN HARISTA GINTING', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi, yaitu', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 8 MONTH 27 DAY', 'P0000710', 'ASISTEN INFRASTRUKTUR', '0000-00-00 00:00:00', '0 YEAR 5 MONTH 27 DAY', 'J00039', 'ASISTEN INFRASTRUKTUR', 13, 'ASISTEN', 'D00119', 'ESTATE - TEKNIK KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00032', 'SLE', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'MSL', 'PT. MUARATOYU SUBUR LESTA', '3', '3F', '0000-00-00 00:00:00', '0 YEAR 8 MONTH 27 DAY', 'N', '5221', 'MSL - MSL', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '82166669535', 'JL. PASAR 2 GG TATA II NO. 11, KEL. TANJUNG SARI, KEC.', 25, 'SITE', 'Apr', '1', 'N'),
(2465, 'ADELLA RR GINTING', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs keluar kebun lebih cepat dikarenakan pertimban', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 YEAR 6 MONTH 8 DAY', 'P0000566', 'STAFF KEUANGAN', '0000-00-00 00:00:00', '2 YEAR 6 MONTH 8 DAY', 'J00263', 'STAFF KEUANGAN', 13, 'ASISTEN', 'D00120', 'ESTATE - ADMINISTRATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00026', 'HPM', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'HPM', 'PT. HAMPARAN PERKASA MAND', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 2 MONTH 14 DAY', 'Y', '5821', 'HPM - HPM', 'N', 'F', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'adella.ginting@tap-agri.c', '81260454679', 'DESA BASAM, BARUS JULU, BARUS JAHE', 25, 'SITE', 'Apr', '1', 'N'),
(2684, 'DHARMA ARIYANTO', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1 YEAR 9 MONTH 25 DAY', 'P0000335', 'KEPALA KEBUN', '0000-00-00 00:00:00', '1 YEAR 9 MONTH 25 DAY', 'J00146', 'KEPALA KEBUN', 14, 'ASISTEN KEPALA', 'D00123', 'ESTATE - OPERATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00004', 'AAPA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'AAP', 'PT. ANUGERAH AGUNG PRIMA ', '4', '4B', '0000-00-00 00:00:00', '1 YEAR 9 MONTH 25 DAY', 'N', '6421', 'AAP - AAPA', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K1', '0000-00-00', '0000-00-00', 'dharmaariyanto085@gmail.c', '85258246090', 'Jl. Suli Komplek Pepabri No.187 A , SampitKOTAWARINGIN TIMUR, KALIMANTAN TENGAH  74322  INDONESI', 47, 'SITE', 'Apr', '1', 'N'),
(2702, 'IMAM AHMAD GOZALI', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '5 YEAR 10 MONTH 14 DAY', 'P0000160', 'ASISTEN SURVEY', '0000-00-00 00:00:00', '5 YEAR 10 MONTH 14 DAY', 'J00038', 'ASISTEN SURVEY', 13, 'ASISTEN', 'D00126', 'ESTATE - SUPPORT KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00044', 'YWA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'YWA', 'PT. YUDHA WAHANA ABADI', '3', '3E', '0000-00-00 00:00:00', '0 YEAR 1 MONTH 14 DAY', 'N', '6321', 'YWA - YWA', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K3', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '1', '1', 41, 'SITE', 'Apr', '1', 'N'),
(2429, 'SUJOKO HARDIANTO', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 YEAR 8 MONTH 22 DAY', 'P0000177', 'ASISTEN TRANSPORT', '0000-00-00 00:00:00', '2 YEAR 6 MONTH 14 DAY', 'J00040', 'ASISTEN TRANSPORT', 13, 'ASISTEN', 'D00119', 'ESTATE - TEKNIK KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00035', 'NPN', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'NPN', 'PT. NATURA PASIFIC NUSANT', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 5 MONTH 14 DAY', 'N', '5521', 'NPN - NPN', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'transport.npn@tap-agri.co', '82167624893', 'DUSUN III KARANG ANYAR RT.000/RW.000, KEL. KARANGBARU, KEC. TALAWI', 25, 'SITE', 'Apr', '1', 'Y'),
(2750, 'JULIANTO .', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga. Sesu', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 2 DAY', 'P0000113', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '0 YEAR 3 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00041', 'SAWA', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'SAW', 'PT. SUBUR ABADI WANA AGUN', '3', '3F', '0000-00-00 00:00:00', '0 YEAR 4 MONTH 2 DAY', 'Y', '5921', 'SAW - SAWA', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '82364866382', 'DUSUN V SIDORUKUN RT 012/RW 005, KEL. SIDORUKUN, KEC.PANGKATAN', 22, 'SITE', 'Apr', '1', 'N'),
(2357, 'RODIANSYAH RODIANSYAH', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 YEAR 11 MONTH 21 DAY', 'P0000126', 'ASISTEN LAPANGAN - PLASMA', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 13 DAY', 'J00033', 'ASISTEN LAPANGAN - PLASMA', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00032', 'SLE', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'MSL', 'PT. MUARATOYU SUBUR LESTA', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 6 MONTH 14 DAY', 'N', '5221', 'MSL - MSL', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'K0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '85393870939', 'DUSUN II RT.008, KEL. BAYAN SARI, KEC. ANGSANA', 26, 'SITE', 'Apr', '1', 'Y'),
(2669, 'MUHAMMAD ILYAS', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena ingin bekerja yang lo', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '6 YEAR 1 MONTH 29 DAY', 'P0000068', 'ASISTEN CSR', '0000-00-00 00:00:00', '6 YEAR 1 MONTH 29 DAY', 'J00023', 'ASISTEN CSR', 13, 'ASISTEN', 'D00126', 'ESTATE - SUPPORT KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00004', 'AAPA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'AAP', 'PT. ANUGERAH AGUNG PRIMA ', '3', '3E', '0000-00-00 00:00:00', '6 YEAR 1 MONTH 29 DAY', 'N', '6421', 'AAP - AAPA', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 0, 'K1', '0000-00-00', '0000-00-00', 'ilyas.internisti@gmail.co', '87841546609', 'JL. Jendral Sudirman No. 226   MAROS, SULAWESI SELATAN', 28, 'SITE', 'Apr', '1', 'N'),
(2388, 'JUARA SINAGA', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri dengan alasan kembali ke dae', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2 YEAR 10 MONTH 14 DAY', 'P0000116', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '1 YEAR 7 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00128', 'ESTATE - OPERATION SUMATERA', 'D00091', 'REGION - SUMATERA', 'D00068', 'OPERATION DIRECTORATE', 'L00006', 'BBB - INTI', 'SUMATERA', 'EST', 'Site Estate', 'PRM', 'Permanent', 'BBB', 'PT. BRAHMA BINABAKTI', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 7 MONTH 13 DAY', 'N', '2121', 'BBB - INTI', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81362238614', 'Jl Monginsidi 4 No 5 Medan Kel Anggrung, Kec MedanPolonia', 26, 'SITE', 'Apr', '1', 'N'),
(2650, 'IRWAN .', '0000-00-00 00:00:00', 'Termination', 'Relocation', 'Pindah lokasi kerja antar group Triputra', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 10 MONTH 14 DAY', 'P0000431', 'OFFICE BOY', '0000-00-00 00:00:00', '4 YEAR 10 MONTH 14 DAY', 'J00186', 'OFFICE BOY', 9, 'STAFF', 'D00047', 'PERSONNEL & GA DEPARTEMENT', 'D00149', 'HUMAN CAPITAL SERVICES DIV', 'D00045', 'HUMAN CAPITAL DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'PRM', 'Permanent', 'AAP', 'PT. ANUGERAH AGUNG PRIMA ', '1', '1D', '0000-00-00 00:00:00', '4 YEAR 10 MONTH 14 DAY', 'N', '6411', 'AAP - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K1', '0000-00-00', '0000-00-00', 'suparmin.krisantono@tap-a', '1', '1', 35, 'HO', 'Apr', '1', 'N'),
(2698, 'CINTOKO .', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '6 YEAR 11 MONTH 14 DAY', 'P0000114', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '6 YEAR 11 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00123', 'ESTATE - OPERATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00044', 'YWA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'YWA', 'PT. YUDHA WAHANA ABADI', '3', '3E', '0000-00-00 00:00:00', '6 YEAR 11 MONTH 14 DAY', 'N', '6321', 'YWA - YWA', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 0, 'K1', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '1', '1', 39, 'SITE', 'Apr', '1', 'N'),
(2662, 'RUDI .', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri atas kemauannya sendiri', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '7 YEAR 3 MONTH 14 DAY', 'P0000544', 'STAFF GUDANG', '0000-00-00 00:00:00', '7 YEAR 3 MONTH 14 DAY', 'J00262', 'STAFF GUDANG', 13, 'ASISTEN', 'D00125', 'ESTATE - ADMINISTRATION KALTIM III', 'D00092', 'REGION - KALTIM III', 'D00068', 'OPERATION DIRECTORATE', 'L00004', 'AAPA', 'KALTIM III', 'EST', 'Site Estate', 'PRM', 'Permanent', 'AAP', 'PT. ANUGERAH AGUNG PRIMA ', '3', '3A', '0000-00-00 00:00:00', '7 YEAR 3 MONTH 14 DAY', 'N', '6421', 'AAP - AAPA', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 0, 'T0', '0000-00-00', '0000-00-00', 'aaa@bbb.com', '1', '1', 34, 'SITE', 'Apr', '1', 'N'),
(1778, 'ANDIKA SULISTIAWAN', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 8 MONTH 13 DAY', 'P0000110', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '0 YEAR 3 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00032', 'SLE', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'MSL', 'PT. MUARATOYU SUBUR LESTA', '4', '4A', '0000-00-00 00:00:00', '4 YEAR 8 MONTH 13 DAY', 'N', '5221', 'MSL - MSL', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85214862100', 'LAMBUR RT 004/RW 002, KEL LAMBUR, KEC MREBET', 32, 'SITE', 'Apr', '1', 'N'),
(1834, 'RUTH HANDAYANI SARAGIH', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 6 MONTH 25 DAY', 'P0000578', 'STAFF LAPORAN', '0000-00-00 00:00:00', '1 YEAR 1 MONTH 14 DAY', 'J00265', 'STAFF LAPORAN', 13, 'ASISTEN', 'D00115', 'ESTATE - ADMINISTRATION KALTENG', 'D00077', 'REGION - KALTENG', 'D00068', 'OPERATION DIRECTORATE', 'L00023', 'GSM - EST 3', 'KALTENG', 'EST', 'Site Estate', 'PRM', 'Permanent', 'GSM', 'PT. GAWI BAHANDEP SAWIT M', '4', '4A', '0000-00-00 00:00:00', '3 YEAR 3 MONTH 25 DAY', 'N', '4123', 'GSM - EST 3', 'N', 'F', '0000-00-00', 'M', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81376416523', 'DUSUN II SEI BERAS SEKATA, KEL SEI BERAS SEKATA, KECSUNGGAL', 27, 'SITE', 'Apr', '1', 'N'),
(352, 'LANGGENG HAKI', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '7 YEAR 6 MONTH 9 DAY', 'P0000779', 'KEPALA TATA USAHA', '0000-00-00 00:00:00', '0 YEAR 2 MONTH 14 DAY', 'J00150', 'KEPALA TATA USAHA', 14, 'ASISTEN KEPALA', 'D00162', 'TASK FORCE PROJECT DEPARTMENT', 'D00162', 'TASK FORCE PROJECT DEPARTMENT', 'D00068', 'OPERATION DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'EST', 'Site Estate', 'PRM', 'Permanent', 'FLT', 'PT. FIRST LAMANDAU TIMBER', '4', '4C', '0000-00-00 00:00:00', '3 YEAR 3 MONTH 14 DAY', 'N', '4311', 'FLT - HO', 'N', 'M', '0000-00-00', 'M', 'ISL', 'Islam', 2147483647, 2147483647, 'K1', '0000-00-00', '0000-00-00', 'langgeng.haki@tap-agri.co', '8112827788', 'JL RIANTO GG KENIKIR NO 31  KEL SUMAMPIR', 29, 'SITE', 'Apr', '1', 'Y'),
(2290, 'FERI ANDRIANTO', '0000-00-00 00:00:00', 'Termination', 'Family Reasons', 'Ybs mengundurkan diri karena alasan keluarga', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 2 MONTH 26 DAY', 'P0000111', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '1 YEAR 1 MONTH 14 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00035', 'NPN', 'KALTIM II', 'EST', 'Site Estate', 'PRM', 'Permanent', 'NPN', 'PT. NATURA PASIFIC NUSANT', '4', '4A', '0000-00-00 00:00:00', '1 YEAR 11 MONTH 14 DAY', 'N', '5521', 'NPN - NPN', 'N', 'M', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '81350430942', 'DUSUN V RT.20/RW.05 KEL.KALIREJO, KEC. KALIREJO,KAB.LAMPUNG TENGAH', 28, 'SITE', 'Apr', '1', 'N'),
(2171, 'TRI MARSIATUN', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi (ingin', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 28 DAY', 'P0000588', 'STAFF LAPORAN', '0000-00-00 00:00:00', '2 YEAR 4 MONTH 14 DAY', 'J00265', 'STAFF LAPORAN', 13, 'ASISTEN', 'D00120', 'ESTATE - ADMINISTRATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00041', 'SAWA', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'SAW', 'PT. SUBUR ABADI WANA AGUN', '4', '4A', '0000-00-00 00:00:00', '2 YEAR 3 MONTH 28 DAY', 'N', '5921', 'SAW - SAWA', 'N', 'F', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85225425775', 'Jeringan RT 012/RW 005, Kel Kebonharjo, Ke Samigaluh,Kab Kulon Progo, Prov DIY Yogyakarta', 26, 'SITE', 'Apr', '1', 'Y'),
(2197, 'INGGIT GANASIH', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'kemauan sendiri', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 1 DAY', 'P0000494', 'RESEARCH & DEVELOPMENT ADMIN STAFF', '0000-00-00 00:00:00', '3 YEAR 6 MONTH 1 DAY', 'J00239', 'RESEARCH & DEVELOPMENT AD', 9, 'STAFF', 'D00100', 'RESEARCH & DEVELOPMENT DIVISION', 'D00100', 'RESEARCH & DEVELOPMENT DIVISION', 'D00112', 'UPSTREAM DIRECTORATE', 'L00001', 'HEAD OFFICE', 'HEAD OFFICE', 'HOJ', 'HO Jakarta', 'PRM', 'Permanent', 'SKM', 'PT. SUKSES KARYA MANDIRI', '3', '3E', '0000-00-00 00:00:00', '1 YEAR 3 MONTH 14 DAY', 'N', '4411', 'SKM - HO', 'N', 'F', '0000-00-00', 'S', 'ISL', 'Islam', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'inggit.ganasih@tap-agri.c', '87781219781', 'Jl Masdulhak No 19 RT 007 RW 002, Kel Limo Kec Limo', 25, 'HO', 'Apr', '1', 'N'),
(1714, 'CHRISTIAN ARGO PRAMANI', '0000-00-00 00:00:00', 'Termination', 'Personal Reasons', 'Ybs mengundurkan diri karena alasan pribadi (ingin', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '4 YEAR 10 MONTH 15 DAY', 'P0000113', 'ASISTEN LAPANGAN', '0000-00-00 00:00:00', '0 YEAR 7 MONTH 13 DAY', 'J00031', 'ASISTEN LAPANGAN', 13, 'ASISTEN', 'D00118', 'ESTATE - OPERATION KALTIM', 'D00082', 'REGION - KALTIM', 'D00068', 'OPERATION DIRECTORATE', 'L00041', 'SAWA', 'KALTIM I', 'EST', 'Site Estate', 'PRM', 'Permanent', 'SAW', 'PT. SUBUR ABADI WANA AGUN', '4', '4A', '0000-00-00 00:00:00', '3 YEAR 7 MONTH 14 DAY', 'N', '5921', 'SAW - SAWA', 'N', 'M', '0000-00-00', 'S', 'PRT', 'Protestan', 2147483647, 2147483647, 'T0', '0000-00-00', '0000-00-00', 'hris@tap-agri.com', '85252566674', 'GENENG RT 004/RW 005, KEL SRINGIN, KEC JUMANTONO', 32, 'SITE', 'Apr', '1', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(17) NOT NULL,
  `password` varchar(17) NOT NULL,
  `email` varchar(25) NOT NULL,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin@helpdesk.com', 'admin'),
(6, 'bima', 'bima', 'bima.seta@tap-agri.com', 'admin'),
(3, 'hcis', 'hcis', 'hcis@tap.com', 'admin'),
(5, 'apritya', 'apritya', 'marcus.nurdhiatmoko@tap-a', 'admin'),
(4, 'suswati', 'suswati', 'suswati@tap-agri.com', 'admin'),
(7, 'teguh', 'teguh', 'teguh.firmansyah@tap-agri', 'admin'),
(8, 'donny', 'donny', 'donny.handono@tap-agri', 'admin'),
(0, 'wedly', 'wedly', 'wedly.sitanggang@tap-agri', 'admin'),
(10, 'sarasuma', 'sarasuma', 'sara.prasasti@tap-agri.co', 'admin'),
(11, 'ghamal', 'ghamal', 'ghamal.yusuf@tap-agri.com', 'admin'),
(12, 'siska', 'siska', 'siska.lubis@tap-agri.com', 'admin'),
(13, 'yonas', 'yonas', 'yonas.ardiyanto@tap-agri.', 'admin'),
(14, 'sindy', 'sindy', 'sindy.putri@tap-agri.com', 'admin'),
(15, 'waluyo', 'waluyo', 'waluyo@tap-agri.co.id', 'admin'),
(16, 'hikmat', 'hikmat', 'hikmat.ansori@tap-agri.co', 'admin'),
(17, 'bernadeth', 'bernadeth', 'bernadeth.damayanti@tap-a', 'admin'),
(18, 'benny', 'benny', 'benny.sigalingging@tap-ag', 'admin'),
(19, 'ade', 'ade', 'ade.febriansyah@tap-agri.', 'admin'),
(20, 'jane', 'jane', 'jane.lokanata@tap-agri.co', 'admin'),
(21, 'dedi', 'dedi', 'dedi.irmawan@tap-agri.co.', 'admin'),
(22, 'silvia', 'silvia', 'silvia.sandra@tap-agri.co', 'admin'),
(23, 'yudi', 'yudi', 'yudi.heryadi@tap-agri.com', 'admin'),
(24, 'saraagnes', 'saraagnes', 'sara.christanti@tap-agri.', 'admin'),
(25, 'hendri', 'hendri', 'muhamad.hendriansyah@tap-', 'admin'),
(26, 'prio', 'prio', 'muhammad.susanto@tap-agri', 'admin'),
(27, 'florian', 'florian', 'florian.luigi@tap-agri.co', 'admin'),
(28, 'mariana', 'mariana', 'mariana@tap-agri.com', 'admin'),
(29, 'citra', 'citra', 'citra.onianti@tap-agri.co', 'admin'),
(30, 'suparmin', 'suparmin', 'suparmin.krisnantono@tap-', 'admin'),
(31, 'nono', 'nono', 'nono.prastowo@tap-agri.co', 'admin'),
(32, 'olivia', 'olivia', 'olivia.devinta@tap-agri.c', 'admin'),
(33, 'trie', 'trie', 'trie.moertyara@tap-agri.c', 'admin'),
(34, 'marta', 'marta', 'marta.sundari@tap-agri.co', 'admin'),
(35, 'bernadeta', 'bernadeta', 'BERNADETA FENI MARETTHA', 'admin'),
(36, 'cassandra', 'cassandra', 'CASSANDRA HERIPUTRI', 'admin'),
(37, 'johlizaan', 'johlizaan', 'Johlizaan', 'admin');
