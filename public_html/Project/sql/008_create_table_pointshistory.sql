/*Create a PointsHistory table (id, user_id, point_change, reason, created)
Any new entry should update the user’s points value (do not update the User points column directly)
SUM the point_change for the user_id to get the total*/

CREATE TABLE IF NOT EXISTS PointsHistory(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    point_change int,
    reason varchar(15) not null COMMENT 'Reason why points were added or removed',
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id)
)