<?php
include "config/connect.php";

mysql_query("DELETE FROM t_member WHERE id ='".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='rekap.php';</script>";
?>