<?php

header("Pragma: public"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=DATA_EXPORT.xls");

include "config/connect.php";

$sql = mysql_query("SELECT id, nama, jk, ttl, umur, telepon, email, alamat, pekerjaan FROM t_member ORDER BY id");

echo "<table border='1'>\n";
$cols = mysql_num_fields($sql);
$ncols = $cols - 1;
echo "<tr>\n";
for ($i = 0; $i <= $ncols; ++$i) {
    $colname = mysql_field_name($sql, $i);
    echo "  <th><b>".htmlentities($colname, ENT_QUOTES)."</b></th>\n";
}
echo "</tr>\n";

while (($row = mysql_fetch_array($sql, MYSQL_ASSOC)) != false) {
     echo "<tr>\n";
     foreach ($row as $therow) {
          echo "  <td>".(htmlentities($therow, ENT_QUOTES))."</td>\n";
     }
    echo "</tr>\n";
}
echo "</table>\n";
?>
