<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem saving your score"];
http_response_code(400);
$data = $_POST;

error_log(var_export($data, true));
if (isset($data["score"])) {
    session_start();
    $reject = false;
    require_once(__DIR__ . "/../../../lib/functions.php");
    $user_id = get_user_id();
    if ($user_id <= 0) {
        $reject = true;
        error_log("User not logged in");
        http_response_code(403);
        $response["message"] = "You must be logged in to save your score";
        flash($response["message"], "warning");
    }
    $score = (int)se($data, "score", 0, false);
    error_log("Rejected " . ($reject ? "true" : "false"));
    if (!$reject) {
        http_response_code(200);
        save_score($score, $user_id, true);
        $response["message"] = "Score Saved!";
        error_log("Score of $score saved successfully for $user_id");
        if ($score >= 10)
        {
            $updatePoints = ($score / 10);
            error_log("$updatePoints points have been added for $user_id");
            $reason = "Won locally";
            error_log("Reason: $reason");
            update_points($updatePoints, $reason, $user_id);
        }
    } else {
        $response["message"] = "AntiCheat Detection Triggered. Score rejected.";
        flash($response["message"], "danger");
    }
}
echo json_encode($response);