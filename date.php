<?php
/**
 * js中的是new  date  创建时间
 */
header ("Content-type:text/html;charset=utf-8");
$time = time();
echo $time;
echo "<br/>";
$arr = getdate();
print_r($arr);
echo "<br/>";
echo $arr["year"]."-".$arr["mon"]."-".$arr["mday"]."<br/>";
// $str = date(Y-m-d );
echo "<br/>";
echo date("Y-m-d H:i:s 星期w",time()-1200000);
$time = "2015-04-28 12:37:16";
echo "<br/>";
echo  "时间为".strtotime($time);
echo "<br/>";
echo date("Y-m-d H:i:s",strtotime($time));
echo "<hr/>";
echo(date("m-d-Y",mktime(0,0,0,12,36,2001)));
echo "<br/>";
echo(date("M-d-Y",mktime(0,0,0,14,1,2001)));
    



?>