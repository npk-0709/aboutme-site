<?php
if(isset($_REQUEST['auth'])){
	date_default_timezone_set('Asia/Ho_Chi_Minh');// set time 
    $handle=fopen("log.txt", "a+");
    $today=date('d/m/Y H:i:s');
    fwrite($handle,$today.'----'.$_SERVER['REMOTE_ADDR']."\n"); // save thông tin vào file
    fclose($handle);
	$auth = $_REQUEST['auth'];
	if ($auth == "test"){
		print("1");
	}else{
		print("2");
	}
}
?>