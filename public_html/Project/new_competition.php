<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

if (isset($_POST["name"]) && !empty($_POST["name"])) {
    $first = (int)se($_POST, "first_place_per", 0, false);
    $second = (int)se($_POST, "second_place_per", 0, false);
    $third = (int)se($_POST, "third_place_per", 0, false);
    $total = $first + $second + $third;

    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;

    $user_id = get_user_id();
    $name = se($_POST, "name", "N/A", false);
    $points = get_user_points($user_id);
    if ($total == 100) {
        if ($points >= $cost) {
            $cost *= -1;
            update_points($cost, "created_comp", $user_id);
            $comp_id = save_data("Competitions", $_POST);
            if ($comp_id > 0) {
                if (add_to_competition($comp_id, get_user_id())) {
                    flash("Successfully created competition", "success");
                } else {
                    flash("Something went wrong while creating competition", "warning");                   
                }
            }
        } else {
            flash("You can't afford this right now", "warning");
        }
    } else {
        flash("Reward percentage must add up to 100%", "warning");
    }
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
            <input id="fpp" name="first_place_per" type="number" class="form-control" placeholder="60%" />
        </div>
        <div class="mb-3">
            <label for="spp" class="form-label">Reward Percentage for 2nd place (out of 100 %)</label>
            <input id="spp" name="second_place_per" type="number" class="form-control" placeholder="30%" />
        </div>
        <div class="mb-3">
            <label for="tpp" class="form-label">Reward Percentage for 3rd place (out of 100 %)</label>
            <input id="tpp" name="third_place_per" type="number" class="form-control" placeholder="10%" />
        </div>
        <div class="mb-3">
            <input type="submit" value="Create Competition (Cost: 2 Points)" class="btn btn-primary" />
        </div>
    </form>
    <script>
        function updateCost() {
            let cost = parseInt(document.getElementById("sreward").value || 0) + 1;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost} Points)`;
        }
    </script>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>