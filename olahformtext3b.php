<?php
if (isset($_POST['Input'])){
  $nama1 = $_POST['nama1'];
  $nama2 = $_POST['nama2'];
  $nama3 = $_POST['nama3'];
  $nama4 = $_POST['nama4'];
  
  echo "Teman-temanku belajar PHP:<br>";
  echo "1. <b>$nama1</b><br>";
  echo "2. <b>$nama2</b><br>";
  echo "3. <b>$nama3</b><br>";
  echo "4. <b>$nama4</b><br>";
}
?>