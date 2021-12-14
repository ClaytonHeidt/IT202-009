<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

if (isset($_POST["name"]) && !empty($_POST["name"])) {
    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;
    $cost += (int)se($_POST, "join_fee", 0, false);
    $cost *= -1;
    echo '<script>';
    echo 'console.log(' . $cost . ')';
    echo '</script>';
    $name = se($_POST, "name", "N/A", false);
    $points = get_user_points();
    if ($points >= $cost) {
        $db->beginTransaction();
        if (update_points($cost, "created_comp")){
            $comp_id = save_data("Competitions", $_POST);
            if ($comp_id > 0) {
                if (add_to_competition($comp_id, get_user_id())) {
                    flash("Successfully created competition", "success");
                    $db->commit();
                } else {
                    $db->rollback();
                }
            } else {
                $db->rollback();
            }
        } else {
            flash("There was a problem deducting points", "warning");
            $db->rollback();
        }
    } else {
        flash("You can't afford this right now", "warning");
    }
} else {
    flash("Please fill out all fields", "warning");
}
?>

<div class="container-fluid">
    <h1>New Competition</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="cname" class="form-label">Competition Name</label>
            <input id="cname" name="name" class="form-control" placeholder="My Competition"/>
        </div>
        <div class="mb-3">
            <label for="sreward" class="form-label">Starting Reward</label>
            <input id="sreward" type="number" name="starting_reward" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Minimum Score (That Qualifies)</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Minimum Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
        </div>
        <div class="mb-3">
            <label for="jf" class="form-label">Fee to Join</label>
            <input id="jf" name="join_fee" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" />
        </div>
        <div class="mb-3">
            <label for="dur" class="form-label">Competition Duration (in Days)</label>
            <input id="dur" name="duration" type="number" class="form-control" placeholder=">= 1" min="1" />
        </div>
        <div class="mb-3">
            <label for="fpp" class="form-label">Reward Percentage for 1st place (out of 100 %)</label>
            <input id="fpp" name="first_place_per" type="number" class="form-control" placeholder="60 %" />
        </div>
        <div class="mb-3">
            <label for="spp" class="form-label">Reward Percentage for 2nd place (out of 100 %)</label>
            <input id="spp" name="second_place_per" type="number" class="form-control" placeholder="30 %" />
        </div>
        <div class="mb-3">
            <label for="tpp" class="form-label">Reward Percentage for 3rd place (out of 100 %)</label>
            <input id="tpp" name="third_place_per" type="number" class="form-control" placeholder="10 %" />
        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function updateCost() {
            let starting = parseInt(document.getElementById("sreward").value || 0) + 1;
            let join = parseInt(document.getElementById("jf").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting + join;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost} Points)`;
        }
    </script>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>