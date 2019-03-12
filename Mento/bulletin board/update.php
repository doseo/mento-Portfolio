<?php

include "db_info.php";


$result = mysql_query("select pass from noticeboard where id=$id", $conn);
$row = mysql_fetch_array($result);


if ($pass==$row[pass]) {

$query = "update noticeboard set name='$name',title='$title',email='$email',
          comment='$comment' where id=$id";
$result = mysql_query($query, $conn);
}
else {
echo ("
<script>
alert('비밀번호가 틀립니다.');
history.go(-1);
</script>
");
exit;
}


mysql_close($conn);


echo ("<meta http-equiv='Refresh' content='1; URL=read.php?id=$id'>");

?>
<center>
<font size=2>정상적으로 수정되었습니다.</font>