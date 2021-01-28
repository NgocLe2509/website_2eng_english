<?php
    $name= $_GET['filename'];
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    readfile("../BaiTapLop/BaiNop/".$name);
    exit;

?>