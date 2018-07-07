<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Jakarta');
include "../koneksi.php";
$day=date('d');
$moon=date('M');
$years=date('Y');
$time=date('H:m:s');
$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
$hr = $array_hr[date('N')];

unset($_SESSION['JenengAdmin'],$_SESSION['kunci'],$_SESSION['jatah'],$_SESSION['tahun']);
header("location:login.php");
ob_end_flush();
?>

 