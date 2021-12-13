/*Competitions table should have the following columns (id, name, duration, expires (now + duration),
current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean),
min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)*/

CREATE TABLE IF NOT EXISTS Competitions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    duration INT DEFAULT 1,
    expires TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    starting_reward INT DEFAULT 1,
    current_reward INT DEFAULT (starting_reward),
    join_fee INT DEFAULT 1,
    current_participants INT DEFAULT 0,
    min_participants INT DEFAULT 3,
    paid_out TINYINT(1) DEFAULT 0,
    min_score INT DEFAULT 1,
    first_place_per INT DEFAULT 60,
    second_place_per INT DEFAULT 30,
    third_place_per INT DEFAULT 10,
    cost_to_create INT DEFAULT (1 + starting_reward),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)