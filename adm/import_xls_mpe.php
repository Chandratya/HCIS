<?php
/*
-- Source Code from My Notes Code (www.mynotescode.com)
-- 
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/

// Load file koneksi.php
include "../connect.php";



if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'mpe.xlsx';
	
	// Load librari PHPExcel nya
	require_once '../PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('../tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(true, true, true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true, true, true ,true,true,true,true,true,true,true);
	
	// Buat query Insert
	$query1 = "INSERT INTO mpe VALUES";
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$a = $row['A']; // Ambil data NIS
		$b = $row['B']; // Ambil data nama
		$c = $row['C']; // Ambil data jenis kelamin
		$d = $row['D']; // Ambil data telepon
		$e = $row['E']; // Ambil data alamat
		$f = $row['F']; // Ambil data NIS
		$g = $row['G']; // Ambil data nama
		$h = $row['H']; // Ambil data jenis kelamin
		$i = $row['I']; // Ambil data telepon
		$j = $row['J']; // Ambil data alamat	
		$k = $row['K']; // Ambil data NIS
		$l = $row['L']; // Ambil data nama
		$m = $row['M']; // Ambil data jenis kelamin
		$n = $row['N']; // Ambil data telepon
		$o = $row['O']; // Ambil data alamat
		$p = $row['P']; // Ambil data NIS
		$q = $row['Q']; // Ambil data nama
		$r = $row['R']; // Ambil data jenis kelamin
		$s = $row['S']; // Ambil data telepon
		$t = $row['T']; // Ambil data alamat
		$u = $row['U']; // Ambil data NIS
		$v = $row['V']; // Ambil data nama
		$w = $row['W']; // Ambil data jenis kelamin
		$x = $row['X']; // Ambil data telepon
		$y = $row['Y']; // Ambil data alamat	
		$z = $row['Z']; // Ambil data NIS
		$aa = $row['AA']; // Ambil data NIS
		$ab = $row['AB']; // Ambil data nama
		$ac = $row['AC']; // Ambil data jenis kelamin
		$ad = $row['AD']; // Ambil data telepon
		$ae = $row['AE']; // Ambil data alamat
		$af = $row['AF']; // Ambil data NIS
		$ag = $row['AG']; // Ambil data nama
		$ah = $row['AH']; // Ambil data jenis kelamin
		$ai = $row['AI']; // Ambil data telepon
		$aj = $row['AJ']; // Ambil data alamat	
		$ak = $row['AK']; // Ambil data NIS
		$al = $row['AL']; // Ambil data nama
		$am = $row['AM']; // Ambil data jenis kelamin
		$an = $row['AN']; // Ambil data telepon
		$ao = $row['AO']; // Ambil data alamat
		$ap = $row['AP']; // Ambil data NIS
		$aq = $row['AQ']; // Ambil data nama
		$ar = $row['AR']; // Ambil data jenis kelamin
		$as = $row['AS']; // Ambil data telepon
		$at = $row['AT']; // Ambil data alamat
		$au = $row['AU']; // Ambil data NIS
		$av = $row['AV']; // Ambil data nama
		$aw = $row['AW']; // Ambil data jenis kelamin
		$ax = $row['AX']; // Ambil data telepon
		$ay = $row['AY']; // Ambil data alamat	
		$az = $row['AZ']; // Ambil data NIS
		$ba = $row['BA']; // Ambil data NIS
		$bb = $row['BB']; // Ambil data alamat	
		$bc = $row['BC']; // Ambil data NIS
		$bd = $row['BD']; // Ambil data NIS
		$be = $row['BE']; // Ambil data NIS
		

		if(empty($a) && empty($b) && empty($c) && empty($d) && empty($e) && empty($f) && empty($g) && empty($h) && empty($i) && empty($j) && empty($k) && empty($l) && empty($m) && empty($n) && empty($o) && empty($p) && empty($q) && empty($r) && empty($s) && empty($t) && empty($u) && empty($v) && empty($w) && empty($x) && empty($y) && empty($z)){
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		}
		
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Tambahkan value yang akan di insert ke variabel $query
			$query1 .= "('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."','".$o."','".$p."','".$q."','".$r."','".$s."','".$t."','".$u."','".$v."','".$w."','".$x."','".$y."','".$z."','".$aa."','".$ab."','".$ac."','".$ad."','".$ae."','".$af."','".$ag."','".$ah."','".$ai."','".$aj."','".$ak."','".$al."','".$am."','".$an."','".$ao."','".$ap."','".$aq."','".$ar."','".$as."','".$at."','".$au."','".$av."','".$aw."','".$ax."','".$ay."','".$az."','".$ba."','".$bb."','".$bc."','".$bd."','".$be."'),";
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
	
	// Kita hilangkan tanda koma di akhir query
	// sehingga kalau di echo $query nya akan sepert ini : (contoh ada 2 data siswa)
	// INSERT INTO siswa VALUES('1011001','Rizaldi','Laki-laki','089288277372','Bandung'),('1011002','Siska','Perempuan','085266255121','Jakarta');
	$query1 = substr($query1, 0, strlen($query1) - 1).";";
	
	// Eksekusi $query
	
	mysqli_query($connect,$query1) or die(mysqli_error($connect));
	echo "<script type='text/javascript'>alert('Import Data Berhasil!'); window.location='table_mpe.php'; </script>";
}

//header('location: table2.php'); // Redirect ke halaman awal


?>
