<?php

    session_start();

    session_unset();

    session_destroy();

    echo "<script>alert(\"Vous êtes déconnecté.\")</script>";
    echo "<script type='text/javascript'>document.location.replace('../../FrontEnd/Views/index.php');</script>";

?>