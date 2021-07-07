<?php

function remove_cookie($cookie) {
    isset($_COOKIE['remember_user']) ;
    unset($_COOKIE[$cookie]); 
    setcookie($cookie, null, -1);
}
?>
