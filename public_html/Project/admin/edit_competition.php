<?php
require_once(__DIR__ . "/../../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$id = se($_GET, "id", -1, false);

//handle page load
$stmt = $db->prepare("SELECT Competitions.id, name, min_participants, starting_reward, duration, min_score, join_fee, first_place_per, second_place_per, third_place_per,
IF(comp_id is null, 0, 1) as joined, CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Competitions
LEFT JOIN (SELECT * FROM CompetitionParticipants WHERE CompetitionParticipants.user_id = :uid) as t ON t.comp_id = Competitions.id WHERE Competitions.id = :cid");

$row = [];
$compid = "";
$compname = "";
$starting_reward = "";
$min_score = "";
$min_participants = "";
$join_fee = "";
$duration = "";
$first_place_per = "";
$second_place_per = "";
$third_place_per = "";

try {
    $stmt->execute([":uid" => get_user_id(), ":cid" => $id]);
    $r = $stmt->fetch();
    if ($r) {
        $row = $r;
        $compid = se($r, "id", "N/A", false);
        $compname = se($r, "name", "N/A", false);
        $starting_reward = se($r, "starting_reward", "N/A", false);
        $min_score = se($r, "min_score", "N/A", false);
        $min_participants = se($r, "min_participants", "N/A", false);
        $join_fee = se($r, "join_fee", "N/A", false);
        $duration = se($r, "duration", "N/A", false);
        $first_place_per = se($r, "first_place_per", "N/A", false);
        $second_place_per = se($r, "second_place_per", "N/A", false);
        $third_place_per = se($r, "third_place_per", "N/A", false);
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("Edit competition error: " . var_export($e, true));
}

if (isset($_POST["name"]) && !empty($_POST["name"])) {
    $first = (int)se($_POST, "first_place_per", 0, false);
    $second = (int)se($_POST, "second_place_per", 0, false);
    $third = (int)se($_POST, "third_place_per", 0, false);
    $total = $first + $second + $third;

    $cost = (int)se($_POST, "starting_reward", 0, false);
    $cost++;

    $compname = se($_POST, "name", "N/A", false);
    $starting_reward = se($_POST, "starting_reward", "N/A", false);
    $min_score = se($_POST, "min_score", "N/A", false);
    $min_participants = se($_POST, "min_participants", "N/A", false);
    $join_fee = se($_POST, "join_fee", "N/A", false);
    $duration = se($r, "duration", "N/A", false);
    $first_place_per = se($_POST, "first_place_per", "N/A", false);
    $second_place_per = se($_POST, "second_place_per", "N/A", false);
    $third_place_per = se($_POST, "third_place_per", "N/A", false);

    $user_id = get_user_id();
    $name = se($_POST, "name", "N/A", false);
    $points = get_user_points();
    if ($total == 100) {
        edit_competition($compid, $compname, $starting_reward, $min_score, $min_participants,
        $join_fee, $duration, $first_place_per, $second_place_per, $third_place_per);
    } else {
        flash("Reward percentage must add up to 100%", "warning");
    }
}
?>

<head><link rel="stylesheet" href="/Project/styles.css"></head>

<div class="container-fluid">
<h1>Edit Competition: <?php se($compname); ?></h1>
    <form method="POST">
        <div class="mb-3">
            <label for="cname" class="form-label">Competition Name</label>
            <input id="cname" name="name" class="form-control" placeholder="My Competition" value=<?php se($compname); ?> />
        </div>
        <div class="mb-3">
            <label for="sreward" class="form-label">Starting Reward</label>
            <input id="sreward" type="number" name="starting_reward" class="form-control" placeholder=">= 1" min="1" value=<?php se($starting_reward); ?> />
        </div>
        <div class="mb-3">
            <label for="ms" class="form-label">Minimum Score (That Qualifies)</label>
            <input id="ms" name="min_score" type="number" class="form-control" placeholder=">= 0" min="0" value=<?php se($min_score); ?> />
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Minimum Participants</label>
            <input id="mp" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" value=<?php se($min_participants); ?> />
        </div>
        <div class="mb-3">
            <label for="jf" class="form-label">Fee to Join</label>
            <input id="jf" name="join_fee" type="number" class="form-control" placeholder=">= 0" min="0" value=<?php se($join_fee); ?> />
        </div>
        <div class="mb-3">
            <label for="dur" class="form-label">Competition Duration (in Days)</label>
            <input id="dur" name="duration" type="number" class="form-control" placeholder=">= 1" min="1" value=<?php se($duration); ?> />
        </div>
        <div class="mb-3">
            <label for="fpp" class="form-label">Reward Percentage for 1st place (out of 100 %)</label>
            <input id="fpp" name="first_place_per" type="number" class="form-control" placeholder="60%" value=<?php se($first_place_per); ?> />
        </div>
        <div class="mb-3">
            <label for="spp" class="form-label">Reward Percentage for 2nd place (out of 100 %)</label>
            <input id="spp" name="second_place_per" type="number" class="form-control" placeholder="30%" value=<?php se($second_place_per); ?> />
        </div>
        <div class="mb-3">
            <label for="tpp" class="form-label">Reward Percentage for 3rd place (out of 100 %)</label>
            <input id="tpp" name="third_place_per" type="number" class="form-control" placeholder="10%" value=<?php se($third_place_per); ?> />
        </div>
        <div class="mb-3">
            <input type="submit" value="Update Competition" class="btn btn-primary" />
        </div>
    </form>

</div>
<?php
require(__DIR__ . "/../../../partials/flash.php");
?>