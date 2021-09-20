<?php
    session_start();
    $browser = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:73.0) Gecko/20100101 Firefox/73.0";

    if($_SERVER["HTTP_USER_AGENT"] == $browser){
        $MdpType = 'password';
    }else{
        $MdpType = 'text';
    }
?>