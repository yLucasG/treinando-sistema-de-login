<?php
session_start();
unset($SESSION['is_usuario']);
header("location: chat.html");
?>
