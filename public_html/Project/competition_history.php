<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
calc_winners();
$db = getDB();
//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "join_fee", 0, false);
    $points = get_user_points();
    join_competition($comp_id, $user_id, $cost);
}
$per_page = 10;

$user_id = get_user_id();

//split query into data and total
$base_query = "(id, name, min_participants, current_participants, current_reward, expires, min_score, join_fee,
first_place_per, second_place_per, third_place_per) FROM Competitions VALUES (:id, :name, :min_participants, :current_participants, :current_reward, :expires, :min_score, :join_fee,
:first_place_per, :second_place_per, :third_place_per)";
$total_query = "SELECT count(1) as total FROM Competitions";

$params = [];
//$params [] = ":id :name, :min_participants, :current_participants, :current_reward, :expires, :min_score, :join_fee,
//:first_place_per, :second_place_per, :third_place_per";
$query = " WHERE 1=1";
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
$name = se($_GET, "name", "", false);

paginate($total_query . $query, $params, $per_page);
//handle page load
$stmt = $db->prepare("SELECT Competitions.id, name, min_participants, current_participants, current_reward, expires, min_score, join_fee,
IF(comp_id is null, 0, 1) as joined, CONCAT(first_place_per,'% - ', second_place_per, '% - ', third_place_per, '%') as place FROM Competitions
LEFT JOIN (SELECT * FROM CompetitionParticipants WHERE user_id = :uid) as uc ON uc.comp_id = Competitions.id
WHERE user_id = $user_id ORDER BY expires LIMIT $per_page OFFSET $offset");
$results = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}
?>
<div class="container-fluid">
    <h1>Competition History</h1>
    <table class="table text-light">
        <thead>
            <th>Competition Name</th>
            <th>Participants</th>
            <th>Reward</th>
            <th>Minimum Score</th>
            <th>Expires</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php if (count($results) > 0) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php se($row, "name"); ?></td>
                        <td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
                        <td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "place", "-"); ?></td>
                        <td><?php se($row, "min_score"); ?></td>
                        <td><?php se($row, "expires", "-"); ?></td>
                        <td>
                            <?php //endif; ?>
                            <a class="btn btn-secondary" href="/Project/view_competition.php?id=<?php se($row, 'id'); ?>">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="100%">No competitions in history</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>