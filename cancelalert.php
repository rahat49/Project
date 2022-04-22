<?php
session_start();
session_destroy();
?>
<script>
    alert ("Are you sure to cancel your booking!");
    window.location.href = "cancelbooking.php";
</script>