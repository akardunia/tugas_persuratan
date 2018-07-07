<?php
$ID = $_GET['id'];
$new = $_GET['key'];
$lama = "../file/surat_keluar/".$new;
$baru = "../file/surat_keluar/".$ID.".pdf";
rename( $lama, $baru);
echo "<script>";
echo "location='$baru';";
echo "</script>";
rename( $baru, $lama);
?>