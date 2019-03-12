<?php

include "db_info.php";

$query = insert into noticeboard (name,email,pass,title,comment,ip,view) values ('$name','$email','$pass','$title','$comment','$REMOTE_ADDR',0); 
$result = mysql_query($query, $conn);

mysql_close($conn);


echo("<meta http-equiv='Refresh' content='1; URL=list.php'>");
?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>