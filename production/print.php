<html> 
<head>
	<title>Lembar Disposisi</title>
	<script>
	window.print();
	</script>
</head>
<body id="printDiv">
<style>
	td{width:50%;}
</style> 
<div>
 <div align="center"><h1>Lembar Disposisi Pimpinan</h1><br>
   AKADEMI KOMUNITAS NEGERI MADIUN<br>
</div>
</div>
<br />
<br />
<br />
<?php
require_once("Connections/koneksi.php");
require("function.php");
if(empty($_GET['id'])){
	echo "<script>alert('Akses ditolak');location='tabel_surat_masuk.php';</script>";
}else{
$id = $_GET['id'];
}
$query = mysqli_query($link,"SELECT * FROM surat_masuk WHERE id_surat_masuk='$id'");
$row = mysqli_fetch_object($query);
?>
 <div>
   <table width="100%" rules="all" border="1" cellpadding="1" cellspacing="2">

     <tr>
       <td>Surat dari : <?php echo $row->asal_surat;?></td>
       <td>Diterima Tanggal : <?php echo Tanggal($row->tgl_terima);?></td>
     </tr>
     <tr>
       <td>Tgl. Surat : <?php echo Tanggal($row->tgl_surat);?></td>
       <td>Nomor Agenda : <?php echo $row->no_agenda;?></td>
     </tr>
     <tr>
       <td>No. Surat : <?php echo $row->no_surat;?></td>
       <td rowspan="2">Diteruskan Kepada : </td>
     </tr>
     <tr>
       <td>Prihal : <?php echo $row->perihal;?></td>
     </tr>
     <tr>
       <td colspan="2"><p align="center">ISI DISPOSISI</p>
       <p>Kepala Kantor:  </p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p></td>
     </tr>
     <tr>
       <td><p>Keterangan : </p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p></td>
       <td><p>Paraf : </p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p>
       <p>&nbsp;</p></td>
     </tr>
   </table>
 </div>
</body>
</html>