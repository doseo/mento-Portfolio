<?php
//ë°ì´í„°ë² ì´ìŠ¤ ì—°ê²°í•˜ê¸°
include "db_info.php";

$result = mysql_query("select pass from noticeboard where id=$id", $conn);
$row = mysql_fetch_array($result);

if ($pass == $row[pass])
{
    $conndel = "delete from noticeboard where id=$id";
    $result = mysql_query($conndel, $conn);
}
else
{
    echo ("
    <script>
    alert('ë¹„ë°€ë²ˆí˜¸ê°€ í‹€ë¦½ë‹ˆë‹¤.');
    history.go(-1)
    </script>
    exit;
}
?>
<center>
<meta http-equiv='Refresh" content='0; URL=list.php'>
<font size=2> ì‚­ì œë˜ì—ˆìŠµë‹ˆë‹¤.</font>
