<script>
    alert("Deconnexion reussite");
</script>
<?php
session_start();
session_destroy();
header("refresh:0;url=index.php");
?>