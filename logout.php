<?php
session_start();
$_SESSION=array();
session_destroy();
echo "logout successful";
include 'main.html';
?>
<script>
    history.pushState("null","null",document.title);
    window.addEventListener('popstate',function(){
        history.pushState("null","null",document.title);
    })
</script>