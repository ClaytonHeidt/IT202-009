<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>
    <?php

    if (is_logged_in(true)) {
        echo "Welcome home, " . get_username();
        //comment this out if you don't want to see the session variables
        //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    }
    
    //Tells the user what their current role is
    $db = getDB();
    $stmt = $db->prepare("SELECT name FROM Roles WHERE id=?");
    $stmt->execute([get_user_id()]);
    $role = $stmt->fetchColumn();
    if (!$role == "") {
        echo "<br>Your current role is ";
        print_r($role);
    }
    $duration = "week";
    ?>
    <?php require(__DIR__ . "/../../partials/score_table.php"); ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>