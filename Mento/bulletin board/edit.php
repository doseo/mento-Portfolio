<html>
<head>
<title>게시판</title>
<style>
<-- 
td { font-size : 9pt }
A:link { font : 9pt; color : black; text-decoration : none; font-family : 굴림; 
         font-size : 9pt; }
A:visited { text-decoration : none; color : black; font-size : 9pt; }
A:hover { text-decoration : underline; color : black; font-size : 9pt; }
-->
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>

<center>
<BR>


<form action=update.php?id=<?=$id?> method=get>

<table width=580 boreder=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
<tr>
<td height=20 align=center bgcolor=#999999>
<font color=white><B>글 수 정 하 기</B></font>
</td>
</tr>

<?php

include "db_info.php";


$result = mysql_query("select id,name,email,title,comment,ip from noticeboard 
                       where id=$id", $conn);
$row = mysql_fetch_array($result);
?>


<tr>
<td bgcolor=white>&nbsp;
<table>
<tr>
<td width=60 align=left>이름</td>
<td align=left>
<INPUT type=text name=name size=20 maxlength=10>
</td>
</tr>
<tr>
<td width=60 align=left>이메일</td>
<td align=left>
<INPUT type=text name=email size=20 maxlength=25>
</td>
</tr>
<tr>
<td width=60 align=left>비밀번호</td>
<td align=left>
<INPUT type=password name=pass size=8 maxlength=8>
</td>
</tr>
<tr>
<td width=60 align=left>제목</td>
<td align=left>
<INPUT type=text name=title size=60 maxlength=35>
</td>
</tr>
<tr>
<td width=60 align=left>내용</td>
<td align=left>
<TEXTAREA name=comment cols=65 rows=15></TEXTAREA>
</td>
</tr>
<tr>
<td colspan=10 align=center>
<INPUT type=submit value="湲� ���ν븯湲�">
&nbsp;&nbsp;
<INPUT type=reset value="�ㅼ떆 �곌린">
&nbsp;&nbsp;
<INPUT type=button value="�섎룎�꾧�湲�" onclick="history.back(-1)">
</td>
</tr>
</table>
</td>
</tr>
<!-- �낅젰 遺�遺� �� -->
</table>
</form>
</center>
</body>
</html>
</html>