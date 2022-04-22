<?php
session_start();
session_destroy();
?>
<script>
    alert ("This Parking Lot Already Booking!Please choose another parking lot.");
    window.location.href = "booking.php";
</script>