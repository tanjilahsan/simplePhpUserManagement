<?php
session_start();
session_unset('loggedin');
session_unset('duplicate');
session_unset('wrongPass');
//$_SESSION['loggedin'] = false;
//$_SESSION['duplicate'] = false;
//$_SESSION['wrongPass'] == false;
header("Location: index.php"); /* Redirect browser */
exit();