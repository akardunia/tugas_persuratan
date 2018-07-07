<?php
    require_once("Connections/koneksi.php"); 

    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM disposisi WHERE no_surat = '$id'";
        $result = mysqli_query($link,$sql) or die(mysqli_errno());
        while ( $baris=mysqli_fetch_array($result)) {
        $format1 = date('d F Y', strtotime($baris['tgl_dispo'] ));
        
        ?>
                              <h2>Surat Dengan No : <?=$baris['no_surat'];?></h2>
                              <p><i class="fa fa-calendar"></i> <strong>Tanggal Dispo: </strong> <?php echo $format1; ?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i><strong> Ditujukan: </strong><?php echo $baris['ditujukan']; ?></li>
                                <li><i class="fa fa-bookmark-o"></i><strong> Keterangan : </strong><?php echo $baris['ket']; ?></li>
                              </ul>
                            </div>
        <?php 

        }
    }
    $link->close();
?>