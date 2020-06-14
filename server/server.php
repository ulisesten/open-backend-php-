<?php
    function server(){

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if( $method == 'GET' )
            echo 'Method is GET\n';

        else
        if ( $method == 'POST')
            echo 'Method is POST';


        echo $uri;
        
    }
?>