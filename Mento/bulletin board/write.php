<html>
<head>
<title>게시판</title>
<style>
<!--
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; font-family : 굴림; 
         font-size : 9pt; }
A:visitied { text-decoration : none; color : black; font-size : 9pt; }
A:hover { text-decoration : underline; color : black; font-size : 9pt; }
-->
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>

<center>
<BR>

<form action=insert.php method=post>

<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
<tr>
<td height=20 align=center bgcolor=#999999>
<font color=white><B>글 쓰 기</B></font>
</td>
</tr>


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
<INPUT type=submit value="글 저장하기">
&nbsp;&nbsp;
<INPUT type=reset value="다시 쓰기">
&nbsp;&nbsp;
<INPUT type=button value="되돌아가기" onclick="history.back(-1)">
</td>
</tr>
</table>
</td>
</tr>

</table>
</form>
</center>
</body>
</html>
</html>
