<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<script>
function changeDuration(){
    var duration;
    if(document.getElementById("duration").value == "day"){
        duration = "day";
    } else if (document.getElementById("duration").value == "week") {
        duration = "week";
    } else if (document.getElementById("duration").value == "lifetime") {
        duration = "lifetime";
    } else {
        duration = "week";
    }
    //document.getElementById("lvl").innerHTML=("Level: " +level);
    changeDuration();
    window.location.reload();
    <?php $duration = "month"; ?>
</script>

<div class="container-fluid">
    <h1>Home</h1>
    <?php
    $role = get_user_role();
    $points = get_user_points();

    if (is_logged_in(true)) {
        echo "Welcome home, " . get_username();
        //comment this out if you don't want to see the session variables
        //echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    }
    
    //Tells the user what their current role is
    if (!$role == "") {
        echo "<br>Your current role is ";
        print_r($role);
    }

    //Tells the user how many points they have
    echo "<br>Points: ";
    print_r($points);

    ?>
    <br><br>
    <select id="duration" onchange='changeDuration()'>  
        <option value="day">Day</option>}  
        <option value="week">Week</option>
        <option value="month">Month</option>
        <option value="lifetime">Lifetime</option>  
    </select> 
    <?php $duration = "lifetime"; ?>
    <?php require(__DIR__ . "/../../partials/score_table.php"); ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>