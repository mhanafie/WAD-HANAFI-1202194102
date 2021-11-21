<?php
$nowDate = time();
if (isset($_POST['updateEvent'])) {
  $JUDBUK = $_POST['JUDBUK'];
  $TULIS = $_POST['TULIS'];
  $TERBIT = $_POST['TERBIT'];
  $DEC = $_POST['DEC'];
  $BHS = $_POST['BHS'];
  $tag = json_encode($_POST['Tag']);
 
  $id = $_POST['DIBOK'];

  // $query = "";
  // if (($_FILES['inputImg']['size']!=0)) {
  //   // $fileIMG = $_FILES['inputImg'];
  //   // $fileIMGName = $_FILES['inputImg']['name'];
  //   // $fileIMGType = $_FILES['inputImg']['type'];
  //   // $fileIMGSize = $_FILES['inputImg']['size'];
  //   // $fileIMGTempLoc = $_FILES['inputImg']['tmp_name'];
  //   // $filePathLocal = "./assets/img/Gambar/Buku/$nowDate-$judulbuku" . ".png";

  //   // $query = "UPDATE `buku_table` SET 
  //   // `judul_buku`='$name',
  //   // `penulis_buku`='$desc',
  //   // `tahun_terbit`='$filePathLocal',
  //   // `deskripsi`='$type',
  //   // `tanggal`='$date',
  //   // `mulai`='$start',
  //   // `berakhir`='$end',
  //   // `tempat`='$loc',
  //   // `harga`=$price,
  //   // `benefit`='$benefit' WHERE id=$id";
  //   // $filePathLocal = "./assets/img/$nowDate-$name" . ".png";
  //   // $saveLocal =  move_uploaded_file($fileIMGTempLoc, $filePathLocal);
  // } else {
  //   //IF THE PATH IS NOT CHANGE
  $KUERI ="";
    $KUERI = "UPDATE `buku_table` SET 
    `judul_buku`='$JUDBUK',
    `penulis_buku`='$TULIS',
    `tahun_terbit`='$TERBIT',
    `deskripsi`='$DEC',`bahasa`='$BHS',
    `tag`='$tag' WHERE `id_buku`= '$id'";
  // }
  // echo $KUERI ;
  $SEQUEL = mysqli_query($CONNE, $KUERI);
  if ($SEQUEL) {
    echo '<br>';

  } else {
    echo '<br>';
    echo $mysqli_error($CONNE);
    // echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //     <strong>Gagal Mengupdate Event! Karena ' . $mysqli_error($conn) . '</strong>
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </buttson>
    //   </div>';
  }

  // echo $name."--".$desc."--".$fileIMGName."\n";
  // echo "type : ".$type."\n";
  // echo "date : ".$date."\n";
  // echo "start : ".$start."\n";
  // echo "location : ".$loc."\n";
  // echo "price : ".$price."\n";
  // echo "benefit : ".json_encode($benefit)."\n";
  // echo "end : ".$end."\n";
// } else {
//   // do nothing
}
