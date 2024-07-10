<?php
if (isset($_POST['Pilih'])) {
    if (!empty($_POST['band'])) {
        echo "Grup Band Favorit Anda:<br>";
        foreach ($_POST['band'] as $band) {
            echo "<b>$band</b><br>";
        }
    } else {
        echo "Anda belum memilih Grup Band favorit.";
    }
}
?>
