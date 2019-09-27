<?php
 header('WWW-Authenticate: Basic Realm="Login please"');
    header('HTTP/1.0 401 Unauthorized');
    
echo "<pre>";
print_r($_SERVER);
?>