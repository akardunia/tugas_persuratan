<?php
date_default_timezone_set('Asia/Jakarta');
$tahun = date('Y');

function Tanggal($date){
if($date == "0000-00-00"){
	$result = "0000-00-00";	
}else{
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);

	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun; 
}
  
return($result);
}


function nosurat(){
	$tahun = date('Y');

	if(isset($_SESSION['tahun'])){
		$var_tahun = $_SESSION['tahun'];
	}else{
		$var_tahun = 0;
	}

	if( $var_tahun == $tahun){
		$bulan=date('n');
				$indo_month = array(
				 '1' => 'I',
				 '2' => 'II',
				 '3' => 'III',
				 '4' => 'IV',
				 '5' => 'V',
				 '6' => 'VI',
				 '7' => 'VII',
				 '8' => 'VIII',
				 '9' => 'IX',
				 '10' => 'X',
				 '11' => 'XI',
				 '12' => 'XII'
				 );
			$bln=$indo_month[$bulan];
			$tahun=date('Y');
			include "Connections/koneksi.php";
			$sql ="SELECT MAX(nomor) AS terakhir from surat_keluar";
					
					//mengecek hasil atau value yang dihasilkan dari query yang disimpan pada variable sql 
			$hasil = mysqli_query($link,$sql);
					//memecah table hasil query
				foreach ($hasil AS $data){
					//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
				$lastID = $data['terakhir'];
					  //echo " || las ID --> ".$lastID;
					  // baca nomor urut  id transaksi terakhir
				$lastNoUrut = substr($lastID, 0, 4);
					 //echo " || las Urut --> ".$lastNoUrut;
					  // nomor urut ditambah 1
				$nextNoUrut = $lastNoUrut + 1;
					  //echo " || Next Urut --> ".$nextNoUrut;
					  // membuat format nomor berikutnya
				$nextID = sprintf("%04s",$nextNoUrut)."/"."UN27.50"."/";
					// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
				}		
			return $nextID;
	}else{
		$nextID = "0001/UN27.50/";
		return $nextID;
	}
					
}

function agenda(){
					include("Connections/koneksi.php");
					$bulan=date('n');
					$indo_month = array(
					 '1' => 'I',
					 '2' => 'II',
					 '3' => 'III',
					 '4' => 'IV',
					 '5' => 'V',
					 '6' => 'VI',
					 '7' => 'VII',
					 '8' => 'VIII',
					 '9' => 'IX',
					 '10' => 'X',
					 '11' => 'XI',
					 '12' => 'XII'
					 );
					$bln=$indo_month[$bulan];
					$thn=date('y');

					$sql ="SELECT max(no_agenda) as terakhir from surat_masuk";
					$hasil = mysqli_query($link,$sql);
					$hasil2 = mysqli_num_rows($hasil);
					if($hasil2 == false){
						$nextID = "0001/IV/".$thn;
					}else{
						//memecah table hasil query
						  $data = mysqli_fetch_array($hasil);
						//mengambil cell atau 1 kotak bagian dari table yaitu cell id_anggota yang dialiaskan terakhir
						  $lastID = $data['terakhir'];
						//echo " || las ID --> ".$lastID;
						// baca nomor urut  id transaksi terakhir
						  $lastNoUrut = is_numeric(substr($lastID, 0, 4));
						//echo " || las Urut --> ".$lastNoUrut;
						// nomor urut ditambah 1
						  $nextNoUrut = $lastNoUrut + 1;
						//echo " || Next Urut --> ".$nextNoUrut;
						// membuat format nomor berikutnya
						  $nextID = sprintf("%04s",$nextNoUrut)."/".$bln."/".$thn;
						// selesai,,, untuk memanggil ID otomatis ini  bisa memasangkan cara
					}
					return $nextID;
}

function encrypt( $s ) {
    $cryptKey  = 'd8578edf8458ce06fbc5bb76a58c5ca4';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $s, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
 
function decrypt($s) {
    $cryptKey  = 'd8578edf8458ce06fbc5bb76a58c5ca4';
    $qDecoded  = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $s ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
?>