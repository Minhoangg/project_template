<?php

    session_start();
    ob_start();
    
if (isset($_SESSION['vai_tro'])&&($_SESSION['vai_tro']==1)) {
    header("location: hang-hoa/");

}else{
    header('location: login.php' );
}

