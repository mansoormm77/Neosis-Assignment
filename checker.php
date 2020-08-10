<?php
if(isset($_POST['num'])){
	set_time_limit(120);
	$num=$_POST['num'];
	$lowest=$num;
	$highest=$num;
	if(arm($num)){
		//Print Number if armstrong
		echo "Number is armstrong";
	}else{
		if($num<407){
			//First way of finding armstrong usefull where number is smaller than 407
		while(true){
			$lowest=$lowest-1;
			if(arm($lowest)){
				echo "Closest Lowest Armstrong is: " .$lowest;
				break;
			}
		}
		while(true){
			$highest=$highest+1;
			if(arm($highest)){
				echo " & Closest Highest Armstrong is: " .$highest;
				break;
			}
		}
	}else{
		//Second way of finding armstrong where more than 3 digit numbers can be found faster.
		$arr=array(407,1634, 8208, 9474,54748, 92727, 93084,548834,1741725, 4210818, 9800817, 9926315);
		for($i=0; $i<count($arr)-1; $i++){
			if($arr[$i]<$num and $arr[$i+1]>$num){
				echo "Closest Lowest Armstrong is: ".$arr[$i]." & Closest Highest Armstrong is: ".$arr[$i+1];
				break;
			}
		}
	}
		
	}
}
function arm($num){
		$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}
if($num==$total)  
{  
return true;  
}  
else  
{  
return false;  
}   
}
?>