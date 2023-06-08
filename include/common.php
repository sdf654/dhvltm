<?php
    $host = '175.115.53.18';
    $userName = 'root';
    $password = 'cube5820!';
    $dbName = 'jongro_locker';
    $db_conn  = mysqli_connect($host, $userName, $password, $dbName);
    mysqli_set_charset($db_conn,"utf8");
    
    // mysql_query("SET NAMES 'utf8'", $db_conn);
    // if ($db_conn) {
    //     echo '접속 성공';
    //     mysqli_close($db_conn);
    // } else {
    //     echo '접속 실패';
    // }

    $Global_curr_area = '';
    $Global_currBoxNo = '';

    $Grobal_this_area_info = {};
    $Grobal_other_area_info = [];
?>