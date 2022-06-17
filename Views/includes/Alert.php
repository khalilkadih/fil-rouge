<?php

namespace Views\includes;
if(isset($_COOKIE['success'])){
    echo'<div class="alert alert-success">'.$_COOKIE['success'].'</div>';
    
}
if(isset($_COOKIE['error'])){
    echo'<div class="alert alert-danger">'.$_COOKIE['error'].'</div>';
    
}
if(isset($_COOKIE['warning'])){
    echo'<div class="alert alert-warning">'.$_COOKIE['warning'].'</div>';
    
}
?>