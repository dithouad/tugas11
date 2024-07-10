<?php
if (isset($_POST['Proses'])) {
    $saran = $_POST['saran'];
    echo "Kritik dan Saran Anda adalah:<br>";
    echo "<b>$saran</b>";
}
?>