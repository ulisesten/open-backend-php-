<?php
    function server(){

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
        $home = include('./get/home.php');

        if( $method == 'GET' )
            echo 'Method is GET<br>';

            if ( $uri == '/home')
                $home.message();

        else
        if ( $method == 'POST')
            echo 'Method is POST';


        echo $uri;
        
    }
?>