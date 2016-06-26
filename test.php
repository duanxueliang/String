<?php
header ("Content-type:text/html;charset=utf-8");
// $s1 = " SSSCCsdfgsdAX@$#67 ";
$s2 = "sssdCCsdfGSDAX@$#67";
// 完成以下操作：【默认的是对 s1操作】
// （1）：将s1的所有字符保存在字符数组中；
$s1 = " SSSCCsdfgsdAX@$#67 ";
$arr =  str_split($s1);
// print_r($arr);
echo "<br/>";
// （2）：取得s1中第三个元素值；
echo $arr[2];
echo "<br/>";
// （3）：打印输出字符串s1的每个字符；
print_r($arr);
echo "<br/>";
// （4）：截取字符串s1中的"sd"该子串；
echo substr($s1,6,2);
echo "<br/>";
$str = explode("sd", $s1);
// print_r($str);
echo "<br/>";
// （5）：返回字符串s1中"67"的下标位置
$i = strpos($s1,"67");
echo $i;
echo "<br/>";
// （6）：返回字符串s1中"gsd"的最后出现的下标位置
$j =  strripos($s1,"gsd");
echo $j;
echo "<br/>";
// （7）：判断两个字符串是否相等【两种方法操作】
$result = strcmp($s1,$s2);
echo $result;

function compare($v,$c){
    $c == $v ? true:false;
}
$re =  compare($s1,$s2);
echo $re;
echo "<br/>";
if ($s1 == $s2){
    echo "true";
}else{
    echo "false";
}
echo "<br/>";
// （8）：将两个字符串进行连接为一个字符串，s2在前面，s1在后面
$result = str_pad($s2,strlen($s1)+strlen($s2),$s1,STR_PAD_LEFT);
echo $result;
echo "<br/>";
// （9）：去掉s1前后空格
$str = trim($s1);
echo $str;
echo "<br/>";
// （10）：将s1只要是大写字符全部转为小写
$str = strtoupper($s1);
echo $str;
echo "<br/>";
echo "你好";
echo $s1;
echo "<br/>";
// （11）：对当前两个字符串内容进行互换
$strs = $s1;
$s1 = $s2;
$s2 = $strs;
echo $s1;
echo "<br/>";
// （12）：将s1字符串的字符顺序颠倒
$result = strrev($s1);
echo $result;
echo "<br/>";
// （13）：将s1字符串的@替换为“大”，$替换为“家”，#替换为“好”
$pattern = array("/@/","/\\$/","/#/");
$pattern2 = array("大","家","好");
echo preg_replace($pattern, $pattern2, $s1);
echo "<br/>";
// （14）：将s1字符串的非英文单词字符替换为大写Z
echo $s1;
echo "<br/>";
$pattern = "/[^a-zA-Z]{1}/";
$pattern2 = "Z";
echo preg_replace($pattern, $pattern2, $s1);
echo "<br/>";
// （15）：统计s1字符串中大小写英文字母个数
$pattern = "/[a-zA-Z]/";
$result = preg_match_all($pattern, $s1, $matches);
echo $result . "<br/>"; 
// （16）：统计s1字符串中非英文单词字符个数
$pattern = "/[^a-zA-Z]/";
$result = preg_match_all($pattern, $s1, $matches);
echo $result . "<br/>";


?>