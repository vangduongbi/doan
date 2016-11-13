

<?php	

	$file= '/sys/bus/w1/devices/28-03159221b1ff/w1_slave';
	$lines=file($file);
	$temp=explode('=',$lines[1]);
	$temp=number_format($temp[1] / 1000,1,'.','');
	//$temp=21;
		echo $temp
?>
