<?php
    function server(){

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['DOCUMENT_ROOT'];
        $home = include('./get/home.php');

        if( $method == 'GET' )
            echo 'Method is GET<br>';

            if ( $uri == '/app/home')
                $home.message();

        else
        if ( $method == 'POST')
            echo 'Method is POST';


        echo $uri;
        
    }
?>