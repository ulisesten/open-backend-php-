<?php
    function server(){

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if( $method == 'GET' )
            echo 'Method is GET<br>';
            
            if ( $uri == 'uno')
                echo 'uri is uno';

        else
        if ( $method == 'POST')
            echo 'Method is POST';


        echo $uri;
        
    }
?>