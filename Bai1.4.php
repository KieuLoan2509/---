<?php 
$arr = array(1, 4, 2, 6, 9, 100, 45, 8, 20);
echo "Mảng đầu vào: ";
for($i = 0; $i <= count($arr); $i++){
	echo $arr[$i];
}
echo "Mảng khi in ra: ";
for ($i = count($arr); $i >= 0; $i--){ 
	echo $arr[$i]."&nbsp;&nbsp;&nbsp;";
}
?>