<?php
include 'connect.php';
if (isset($_POST['APUS'])) {
    APUS($_POST['APUS'], $CONNE);
}
function APUS($id_buku, $CONNE)
{

    $KUERI = "DELETE FROM buku_table where id_buku=.$id_buku";
    $SEQUEL = mysqli_query($CONNE, $KUERI);
}