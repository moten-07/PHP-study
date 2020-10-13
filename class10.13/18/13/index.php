<html>
<head>
<title>热焦新闻</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
 function chinesesubstr($str,$start,$len) { 
 	$tmpstr="";
    $strlen=$start+$len; 
    for($i=0;$i<$strlen;$i++) { 
        if(ord(substr($str,$i,1))>0xa0) { 
            $tmpstr.=substr($str,$i,2); 
            $i++; 
         } 
		else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr; 
}
?>
<table width="600" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
  <tr>
    <td width="600" height="257" align="center" valign="top" background="images/image_08.gif"><table width="579" height="271"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="579" height="50" align="center" class="word_orange"><span class="style1">热焦新闻</span></td>
        </tr>
        <tr>
          <td height="249" align="center" valign="top">              <table width="460"  border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFCC" bgcolor="#DFDFDF">
                <?php
					$conn=mysqli_connect("localhost","root","111") or die("数据库服务器连接错误".mysqli_error());
					mysqli_select_db($conn,"db_database18") or die("数据库访问错误".mysqli_error());
					mysqli_query($conn,"set names gb2312");
					$sql=mysqli_query($conn,"select * from tb_affiche order by createtime desc limit 0,10");
					$info=mysqli_fetch_array($sql);
				    if($info==false){
					  echo "本站暂无公告信息!";
					 }
					else{
					$i=0;
				      do{ 
				  ?>
                <tr bgcolor="#E3E3E3">
                  <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;
                      <?php 
								$i=$i+1;	
								echo $i."、".chinesesubstr($info['title'],0,20);
								  if(strlen($info['title'])>20){
									echo "...";

								  } 
							   ?>
                      <em>&nbsp;[<?php echo $info['createtime'];?>]</em> </td>
                </tr>
                <?php
				      }while($info=mysqli_fetch_array($sql));
			       }
					mysqli_free_result($sql);								//关闭记录集
					mysqli_close($conn);									//关闭mysqli数据库服务器
				  ?>
            </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>