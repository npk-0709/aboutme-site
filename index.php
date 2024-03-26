<?php
if(isset($_REQUEST['delete']) && $_REQUEST['delete']=="true"){  // http://{domain}/index.php?delete=#  will delete all data and create new file 
    $handle=fopen("log.txt", "w");
    fwrite($handle,"");
    fclose($handle);
}else{
    date_default_timezone_set('Asia/Ho_Chi_Minh');// set time 
    $handle=fopen("log.txt", "a+");
    $today=date('d/m/Y H:i:s');
    fwrite($handle,$today.'----'.$_SERVER['REMOTE_ADDR']."\n"); // save thông tin vào file
    fclose($handle);
    Header('Location: nguyen-phu-khuong.html'); 
}
?>