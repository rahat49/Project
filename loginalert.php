<?php
session_start();
session_destroy();
?>
<script>
    alert ("Please Login First");
    window.location.href = "login.php";
</script>