<?php
include_once('config.php');
$sql = "DELETE FROM Bookings WHERE id='" . $_GET['name'] . "'";
if (mysqli_query($Koneksi, $sql)) {
    echo "Record deleted successfully";
    header('location:Bookings.php');
} else {
    echo "Error";
}
mysqli_close($Koneksi);
?>