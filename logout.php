<?php
ob_start();
session_start();
end($_SESSION);
session_unset();
session_destroy();
header('Location:index.php');
?>