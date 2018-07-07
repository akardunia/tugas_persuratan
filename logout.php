<?php
ob_start();
session_start(); // memulai session
date_default_timezone_set('Asia/Jakarta');
include "../koneksi.php";
$day=date('d');
$moon=date('M');
$years=date('Y');
$time=date('H:m:s');
$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
$hr = $array_hr[date('N')];

//$emboh=mysqli_query($link,"insert into history (day,tgl,moon,years,time,ket,cc) Values ('$hr','$day','$moon','$years','$time','Keluar dari Sistem','$_SESSION[IdAdmin]')");
unset($_SESSION['JenengAdmin'],$_SESSION['kunci'],$_SESSION['jatah']); // menghapus session
header("location:login.php"); // mengambalikan ke form_login.php
ob_end_flush();
?>

 