<?php
session_unset($_SESSION['admin']);
session_destroy();
header('location: index.php');