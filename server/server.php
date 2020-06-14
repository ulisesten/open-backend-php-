<?php
    function server(){
        if( $_SERVER['REQUEST_METHOD'] == 'GET' )
            echo 'Method is GET';
    }
?>