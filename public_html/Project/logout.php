<?php
session_start();
require(__DIR__ . "/../../lib/functions.php");
reset_session();
require(__DIR__ . "/../../partials/nav.php");

flash("Successfully logged out", "success");
header("Location: login.php");
?>