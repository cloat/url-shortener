<?php
$status = $_SERVER [ 'REDIRECT_STATUS' ];
$codes = array(
                    403 => array( '403 Forbidden' , 'The server has refused to fulfill your request.'),
                    404 => array( '404 Not Found' , 'The URL was not found.'),
                    );
$title = $codes [$status ][0 ];
$message = $codes [ $status ][1 ];
if ( $title == false || strlen( $status ) != 3 ) {
      $message = 'Please supply a valid status code.' ;
}
echo '<p><h1>' . $title . '</h1></p>' .
            '<p>' . $message . '</p>' ;

?>
