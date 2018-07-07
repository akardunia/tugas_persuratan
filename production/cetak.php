<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lembar Disposisi</title>
</head>

<body>
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
<table width="100%">
  <tr>
    <td height="77" colspan="2"><img src="../logo.png" width="80" height="80" /></td>
    <td><p align="center">LEMBAR DISPOSISI PIMPINAN</p>
    <p align="center">Akademi Komunitas Negeri Madiun </p></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <tr>
    <td width="229">Sifat Surat </td>
    <td width="15"><div align="center">:</div></td>
    <td width="1024"><label>
	<?php
	if($row->sifat == 'penting'){
		echo "<input type='checkbox' checked='checked' name='checkbox' value='checkbox' /> Penting ";
	}else{
		echo "<input type='checkbox' name='checkbox' value='checkbox' /> Penting ";
	}
	
	if($row->sifat == 'segera'){
		echo "<input type='checkbox' checked='checked' name='checkbox' value='checkbox' /> Segera";
	}else{
		echo "<input type='checkbox' name='checkbox' value='checkbox' /> Segera ";
	}
	if($row->sifat == 'biasa'){
		echo "<input type='checkbox' checked='checked' name='checkbox' value='checkbox' /> Biasa ";
	}else{
		echo "<input type='checkbox' name='checkbox' value='checkbox' /> Biasa ";
	}
	?>
	</label></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
    </tr>
  <tr>
    <td>Nomor Agenda </td>
    <td><div align="center">:</div></td>
    <td><?php echo $row->no_agenda;?></td>
  </tr>
  <tr>
    <td>Tanggal Agenda </td>
    <td><div align="center">:</div></td>
    <td><?php echo Tanggal($row->tgl_agenda);?></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
    </tr>
  <tr>
    <td>Nomor Surat </td>
    <td><div align="center">:</div></td>
    <td><?php echo $row->no_surat;?></td>
  </tr>
  <tr>
    <td>Tanggal Surat </td>
    <td><div align="center">:</div></td>
    <td><?php echo Tanggal($row->tgl_surat);?></td>
  </tr>
  <tr>
    <td>Asal Surat </td>
    <td><div align="center">:</div></td>
    <td><?php echo $row->asal_surat;?></td>
  </tr>
  <tr>
    <td>Perihal</td>
    <td><div align="center">:</div></td>
    <td><?php echo $row->perihal;?></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <tr>
    <td>Didisposisikan Kepada</td>
    <td><div align="center">:</div></td>
    <td rowspan="2"><textarea name="textarea2" cols="100%" rows="15%"></textarea>      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <tr>
    <td>Isi</td>
    <td><div align="center">:</div></td>
    <td rowspan="5"><p>
      <label>
      <textarea name="textarea" cols="100%" rows="10%"></textarea>
      </label>
    </p>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <tr>
    <td>Paraf</td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
