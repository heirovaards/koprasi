<?php
  $host = "localhost";
  $username= "satriya";
  $password= "05021995";
  $db_name ="koprasi";
  $koneksi=mysql_connect($host,$username,$password) OR die ("not connected to database" );
  mysql_select_db($db_name) OR die ("database not exist" );
?>
