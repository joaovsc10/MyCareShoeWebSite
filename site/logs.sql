CREATE TABLE `log_table` (
    `table_name` TEXT NOT NULL,
    `tracking_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `data_id` INT NOT NULL,
    `field` VARCHAR(50) NOT NULL,
    `old_value` TEXT NOT NULL,
    `new_value` TEXT NOT NULL,
    `modified` DATETIME NOT NULL
) ENGINE = MYISAM;

DELIMITER $ $ CREATE TRIGGER `update_data_personal_info`
AFTER
UPDATE
    on `personal_info` FOR EACH ROW BEGIN IF (NEW.patient_number != OLD.patient_number) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`,
        `user_id`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "patient_number",
        OLD.patient_number,
        NEW.patient_number,
        NOW()
    );

END IF;

IF (NEW.gender != OLD.gender) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "gender",
        OLD.gender,
        NEW.gender,
        NOW()
    );

END IF;

IF (NEW.birth != OLD.birth) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "birth",
        OLD.birth,
        NEW.birth,
        NOW()
    );

END IF;

IF (NEW.height != OLD.height) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "height",
        OLD.height,
        NEW.height,
        NOW()
    );

END IF;

IF (NEW.weight != OLD.weight) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "weight",
        OLD.weight,
        NEW.weight,
        NOW()
    );

END IF;

IF (NEW.feet_size != OLD.feet_size) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "feet_size",
        OLD.feet_size,
        NEW.feet_size,
        NOW()
    );

END IF;

IF (NEW.diabetes != OLD.diabetes) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "diabetes",
        OLD.diabetes,
        NEW.diabetes,
        NOW()
    );

END IF;

IF (NEW.type_feet != OLD.type_feet) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "type_feet",
        OLD.type_feet,
        NEW.type_feet,
        NOW()
    );

END IF;

IF (NEW.name != OLD.name) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "name",
        OLD.name,
        NEW.name,
        NOW()
    );

END IF;

IF (NEW.pressure_threshold != OLD.pressure_threshold) THEN
INSERT INTO
    log_table (
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "pressure_threshold",
        OLD.pressure_threshold,
        NEW.pressure_threshold,
        NOW()
    );

END IF;

IF (NEW.occurences_number != OLD.occurences_number) THEN
INSERT INTO
    log_table (
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "occurences_number",
        OLD.occurences_number,
        NEW.pressure_threshold,
        NOW()
    );

END IF;

IF (NEW.time_interval != OLD.time_interval) THEN
INSERT INTO
    log_table (
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "personal_info",
        NEW.patient_number,
        "time_interval",
        OLD.time_interval,
        NEW.pressure_threshold,
        NOW()
    );

END IF;

END $ $ DELIMITER;

DELIMITER $ $ CREATE TRIGGER `update_data_user`
AFTER
UPDATE
    on `user` FOR EACH ROW BEGIN IF (NEW.user_id != OLD.user_id) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "user_id ",
        OLD.user_id,
        NEW.user_id,
        NOW()
    );

END IF;

IF (NEW.profile_id != OLD.profile_id) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "profile_id",
        OLD.profile_id,
        NEW.profile_id,
        NOW()
    );

END IF;

IF (NEW.email != OLD.email) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "email ",
        OLD.email,
        NEW.email,
        NOW()
    );

END IF;

IF (NEW.password != OLD.password) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "password",
        OLD.password,
        NEW.password,
        NOW()
    );

END IF;

IF (NEW.username != OLD.username) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "username ",
        OLD.username,
        NEW.username,
        NOW()
    );

END IF;

IF (NEW.patient_number != OLD.patient_number) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "patient_number",
        OLD.patient_number,
        NEW.patient_number,
        NOW()
    );

END IF;

IF (NEW.access_permission != OLD.access_permission) THEN
INSERT INTO
    log_table (
        `table_name`,
        `data_id`,
        `field`,
        `old_value`,
        `new_value`,
        `modified`
    )
VALUES
    (
        "user",
        NEW.user_id,
        "access_permission ",
        OLD.access_permission,
        NEW.access_permission,
        NOW()
    );

END IF;

END $ $ DELIMITER;