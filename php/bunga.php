<?php

$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "koprasi";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');

$name = "system";
$account = addslashes(strip_tags($_POST['account']));
$ammount = addslashes(strip_tags($_POST['ammount']));
$nominal = "system";
$teller = "system";
$keterangan = "bunga";
$tipe = "bunga";


$sql1= "SELECT saldo FROM nasabah  WHERE rekening = '$account'";
$qry1=mysql_query($sql1);
$fetch1 = mysql_fetch_assoc($qry1);
$saldo_awal = $fetch1['saldo'];
// echo $saldo_awal;

$saldo_akhir = $saldo_awal + $ammount;

// echo mysql_error();

$sqlinsert = "INSERT INTO transaksi VALUES(null, '$name','$ammount', '$nominal', CURRENT_TIMESTAMP, '$teller', $account, '$tipe', '$saldo_akhir' ,'$saldo_awal', '$keterangan')";

$queryinsert = mysql_query($sqlinsert);
// echo "Error message = ".mysql_error();

$sqlupdate = "UPDATE nasabah SET saldo = '$saldo_akhir' WHERE rekening = $account";
$qryupdate = mysql_query($sqlupdate);
// echo "Error message = ".mysql_error();

echo '<script type="text/javascript">alert("Saldo sudah di update");
location.href = "../index.php"</script>';


?>
