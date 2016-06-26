<?php
header ("Content-type:text/html;charset=utf-8");
/**
 * 第六章  字符串和日期
 * 一.字符串
 *    字符串是php基本数据类型之一 ，标量类型
 *    没有长度显示
 *    处理函数
 * 1.自动将整数转成字符串
 * $str = (123);     $str = ("123");
 * 2.与数组无缝衔接
 * $str = ("12346");   $str[0] = 1;
 * 3.双引号会将变量转译
 * 常用函数：
 *  1.print()和printf()
 *     %d表示十进制
 *     $f 表示浮点数      
 *     printf()是将内容格式化后输出到页面
 *     sprintf()将内容格式化后进行返回  不输出页面
 *  2.strlen()和mb_strlen()  *******
 *     获取字符串的长度
 *     当字符串中包含中文时  应当使用 mb_strlen($str,"utf-8")来获取
 *  3.strpos() --  js中的indexof()  大小写敏感    *********
 *     查找第一次出现的某个字符串的索引位置     找到的话返回索引   没找到时候 返回false
 *     stripos() --  忽略大小写
 *      $str ="aabbccdd中国重庆";
 *      $i = stripos($str,"AA");
 *  4.strrpos()  --  js中的   lastindexof()  大小写敏感    *********
 *     查找最后一次出现的某个字符串的索引位置     找到的话返回索引   没找到时候 返回false
 *     strripos() --  忽略大小写
 *  5.strcmp()比较两个字符串是否相等   返回0表示长度相等  大小写敏感
 *    strcasecmp()  忽略大小写
 *  6.substr()    截取一部分字符串并返回    ********
 *  7.explode()字符串分隔成数组  
 *       $arr = explode($seprator,$string[,$limit]);
 *  8.implode()   js中的join()
 *      将数组中的所有元素组合为一个字符串  
 *  9.str_split()   等分
 *  10.str_replace()替换        
 *  11.ltrim()   rtrim()    trim()
 *  12.$str = " 213 this  is  my  life";
 *  echo ltrim($str," 0..9");     
 *  13.strtouper()  转成大写并返回     
 *      $str =  strtolower()
 *     ucfirst()  将字符串第一次字符转成大写
 *     ucwords()  以空格分隔的每个单词首字符转成大写
 *  14.strrev()将顺序反转
 *     $result = strrev("要反转的内容");
 *  15.number_format()格式化   对数字千位分组
 *  16.md5()   --用来对密码加密  字符串加密
 *     md5($str[,raw]);
 *     raw:布尔值  返回false表示32位16进制加密  
 *              返回true表示16位二进制加密
 *  17.n12br()
 *    换行
 *  18.
 *  二.正则表达式
 *     1.$result = preg_match($pattern,$subject,$matches);
 *     2.$result = preg_match_all($pattern,$subject,$matches);
 *     3.preg_replace();
 *     4.preeg_grep();
 *     5.preg_split(); 
 *            
 *   
 */ 

printf("年龄在%d到%d之间",12,25);
echo "<br/>";
$str = "asfhjkfds";
printf("输出字符串内容%s",$str);

echo "<br/>";
$str = "213 this  is  my  life  ";
 echo ltrim($str," 0..9");
 echo "<hr/>";
 $str1 = "12.3456";
printf("输出浮点数保留两位小数是：%0.2f",$str1);
echo "<br/>";
$s = sprintf("%0.2f",$str1);
 echo "$s";
 echo "<br/>";
$str2 = "abcd1234中国";
echo strlen($str2);
echo "<br/>";
echo mb_strlen($str2,"utf-8");
echo "<hr/>";
$str ="aabbccdd中国重庆";
$i = strpos($str,"中国");
echo "$i";
echo "<br/>";
echo strcmp($str2,$str2);
echo "<br/>";
echo substr("hello wrold",6,5);
echo "<hr/>";
$str3 = "重庆,上海,成都";
$arr =  explode(",",$str3);
print_r($arr);
echo "";
echo "<br/>";
$arr1 = array("重庆","上海","成都");
$str = implode("|",$arr);
echo $str;
echo "<br/>";
$str = "aabbcc";
$str = str_replace("cc", "重庆", $str);
echo $str;
echo "<br/>";
$c = 0;
$str = "aaccddcc";
$str = str_replace("cc", "重庆", $str,$c);
echo $str."..被替换了$c"."次";
echo "<br/>";
$str = "  123     abc  ";
echo $str;
echo "<hr/>";
$str = trim($str);
echo $str;
echo "<br/>";
$str = str_replace(" ", "", $str,$c);
echo $str;
echo "<br/>";
$str5  = "abcd";
$str4 = "zxght"; 
$str5  =  str_pad($str5,6,$str4,STR_PAD_RIGHT);
echo $str5;
echo "<br/>";
echo md5($str,false);
echo "<hr/>";
$subject = "今天是2016-05-11";
$pattern = "/([0-9]{4})-([0-9]{2})-([0-9]{2})/";
$pattern2 = "\\1年\\2月\\3日";
echo preg_replace($pattern, $pattern2, $subject);
echo "<br/>";
$subject ="中国的china";
$pattern = array("/中国/","/china/");
$pattern2 = array("中华","人民");
echo preg_replace($pattern, $pattern2, $subject);
echo "<br/>";
$subject =array("中国的china","china的中国");
$pattern = array("/中国/","/china/");
$pattern2 = "中华";
$arr =  preg_replace($pattern, $pattern2, $subject);
print_r($arr);





?>