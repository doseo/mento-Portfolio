<?php
//�곗씠�곕쿋�댁뒪 �곌껐�섍린
include "db_info.php";

$page_size = 10;
$page_list_size = 10;

if (!$no || $no < 0) $no=0;

$query = "select id,name,email,title,DATE_FORMAT(wdate,'%Y-%m-%d') as date,view 
          from noticeboard order by id desc limit $no,$page_size";
$result = mysql_query($query,$conn);

// 珥� 寃뚯떆臾� �� 援ы븯湲�
$result_count = mysql_query("select count(*) from noticeboard", $conn);
$result_row = mysql_fetch_row($result_count);
$total_row = $result_row[0];

// 珥� �섏씠吏� 怨꾩궛
if ($total_row <= 0) $total_row = 0;    // 珥� 寃뚯떆臾쇱쓽 媛믪씠 �놁쑝硫� 湲곕낯媛믪쑝濡� �명똿

$total_page = floor(($total_row - 1) / $page_size);

// �꾩옱 �섏씠吏� 怨꾩궛
$current_page = floor($no/$page_size);
?>

<html>
<head>
<title>blackk 寃뚯떆��</title>
<style>
<!--
    td { font-size : 9pt; }
    A:link { font : 9pt; color : black; text-decoration : none; font-family : 援대┝;
             font-size : 9pt; }
    A:visited { text-decoration : none; color : black; font-size : 9pt; }
    A:hover { text-decoration : underline; color : black; font-size : 9pt; }
-->
</style>
</head>

<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 寃뚯떆�� ���댄� -->
<font size=2> blackk~~~~~~</a>
<BR>
<BR>

<!-- 寃뚯떆臾� 由ъ뒪�몃� 蹂댁씠湲� �꾪븳 �뚯씠釉� -->
<table width=580 border=0 cellpadding=2 cellsacing=1 bgcolor=#777777>
<!-- 由ъ뒪�� ���댄� 遺�遺� -->
<tr height=20 bgcolor=#999999>
    <td width=30 align=center>
        <font color=white>踰덊샇</font>
    </td>
    <td width=370 align=center>
        <font color=white>�� 紐�</font>
    </td>
    <td width=50 align=center>
        <font color=white>湲��댁씠</font>
    </td>
    <td width=60 align=center>
        <font color=white>�� 吏�</font>
    </td>
    <td width=40 align=center>
        <font color=white>議고쉶��</font>
    </td>
</tr>
<!-- 由ъ뒪�� ���댄� �� -->

<!-- 由ъ뒪�� 遺�遺� �쒖옉 -->
<?php
while($row=mysql_fetch_array($result))
{

?>
<!-- �� �쒖옉 -->
<tr>
    <!-- 踰덊샇 -->
    <td height=20 bgcolor=white align=center>
        <a href=read.php?id=<?=$row[id]?>&no=<?=$no?>><?=$row[id]?></a>
    </td>
    <!-- 踰덊샇 �� -->
    <!-- �쒕ぉ -->
    <td height=20 bgcolor=white>&nbsp;
        <a href=read.php?id=<?=$row[id]?>&no=<?=$no?>><?=strip_tags($row[title], 
        '<b><i>');?></a>
    </td>
    <!-- �쒕ぉ �� -->
    <!-- �대쫫 -->
    <td align=center height=20 bgcolor=white>
        <font color=black>
            <a href="mailto:<?=$row[email]?>"><?=$row[name]?></a>
        </font>
    </td>
    <!-- �대쫫 �� -->
    <!-- �좎쭨 -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row[date]?></font>
    </td>
    <!-- �좎쭨 �� -->
    <!-- 議고쉶�� -->
    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row[view]?></font>
    </td>
    <!-- 議고쉶�� �� -->
</tr>
<!-- �� �� -->

<?php
}    // end while

mysql_close($conn);
?>
</table>

<table border=0>
<tr>
<td width=600 height=20 align=center rowspan=4>
<font color=gray>
&nbsp;

<?php

// �섏씠吏� 由ъ뒪��
// �섏씠吏� 由ъ뒪�몄쓽 泥ル쾲吏몃줈 �쒖떆�� �섏씠吏�媛� 紐뉖쾲吏� �섏씠吏��몄� 援ы븯�� 遺�遺�
$start_page = (int)($current_page / $page_list_size) * $page_list_size;

// �섏씠吏� 由ъ뒪�몄쓽 留덉�留� �섏씠吏�媛� 紐뉖쾲吏� �섏씠吏��몄� 援ы븯�� 遺�遺�
$end_page = $start_page + $page_list_size - 1;
if ($total_page < $end_page) $end_page = $total_page;

// �댁쟾 �섏씠吏� 由ъ뒪�� 蹂댁뿬二쇨린
if ($start_page >= $page_list_size){
    $prev_list = ($start_page - 1) * $page_size;
    echo ("<a href=\"$PHP_SELF?no=$prev_list\">�� </a>\n";
}

// �섏씠吏� 由ъ뒪�몃� 異쒕젰
for ($i=$start_page; $i <= $end_page; $i++) {

$page = $page_size * $i;    // �섏씠吏� 媛믪쓣 no 媛믪쑝濡� 蹂���
$page_num = $i + 1;    // �ㅼ젣 �섏씠吏� 媛믪씠 0遺��� �쒖옉�섎�濡� �쒖떆�좊븣�� 1�� �뷀빐以���.

    if ($no != $page) {
        echo ("<a href=\"PHP_SELF?no=$page\">");
    }

    echo " $page_num";    //�섏씠吏�瑜� �쒖떆

    if ($no != $page) {
        echo "</a>";
    }

if ($total_page > $end_page)
{
    // �ㅼ쓬 �섏씠吏� 由ъ뒪�몃뒗 留덉�留� 由ъ뒪�� �섏씠吏�蹂대떎 �� �섏씠吏� 利앷��섎㈃ �쒕떎.
    $next_list = ($end_page + 1) * $page_size;
    echo ("<a href=$PHP_SELF?no=$next_list>�� </a><p>");
}
?>

</font>
</td>
</tr>
</table>

<a href=write.php>湲��곌린</a>
</center>
</body>
</html>
