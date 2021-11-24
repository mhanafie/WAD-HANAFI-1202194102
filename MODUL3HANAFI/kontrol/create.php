<?php
$nowDate = time();
if (isset($_POST['submit'])) {
    $JUDBUK = $_POST['JudBuk'];
    $TULIS = $_POST['Tulis'];
    $TERBIT = $_POST['Terbit'];
    $DEC = $_POST['Dec'];
    $BHS = $_POST['BHS'];
    $tag = json_encode($_POST['Tag']);


    $fileIMG = $_FILES['inputImg'];
    $fileIMGName = $_FILES['inputImg']['name'];
    $fileIMGType = $_FILES['inputImg']['type'];
    $fileIMGSize = $_FILES['inputImg']['size'];
    $fileIMGTempLoc = $_FILES['inputImg']['tmp_name'];

    $filePathLocal = "./assets/img/$nowDate-$JUDBUK" . ".png";
    $saveLocal = move_uploaded_file($fileIMGTempLoc, $filePathLocal);


    $KUERI = "INSERT INTO `buku_table`
    (`judul_buku`, `penulis_buku`, `tahun_terbit`,
     `deskripsi`, `gambar`, `tag`,
      `bahasa`) 
    VALUES ('$JUDBUK','$TULIS','$TERBIT',
    '$DEC','$filePathLocal','$tag','$BHS')";


    $SEQUEL = mysqli_query($CONNE, $KUERI);
    if ($SEQUEL) {
        echo '<br>';

    } else {

    }

    // echo $name."--".$desc."--".$fileIMGName."\n";
    // echo "type : ".$type."\n";
    // echo "date : ".$date."\n";
    // echo "start : ".$start."\n";
    // echo "location : ".$loc."\n";
    // echo "price : ".$price."\n";
    // echo "benefit : ".json_encode($benefit)."\n";
    // echo "end : ".$end."\n";
} else {
    // do nothing
}
