<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "terkoneksikan.php";

//mengambil 5 berita terbaru dari database


    echo "<div class=p id=drz$i>";
    echo "<img src='../avatar/".$b['foto']."' width=30 align=left><b><a href=../komunitas/teman_status.php?nama=" .$b['nama']." target=_parent>".$b['nama']." </a></b> <br>";
    echo "<font size=1>".$b['tgl_status']." (<abbr class='timeago' title='".$b['tgl_posting']."'>".$b['tgl_posting']." </abbr>)<br>Status: </font><font size=1>".$b['isi_status']."</font><br>";
    echo "</div>\n";

?>
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.timeago.js" type="text/javascript"></script>
 <script type="text/javascript">
 jQuery(document).ready(function() {
   jQuery("abbr.timeago").timeago();
 });
 //skrift timeago atau waktu mundur
 </script>
</body>
</html>

