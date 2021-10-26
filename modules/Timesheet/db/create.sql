CREATE TABLE time_2_invoice (
    id                  CHAR(36) NOT NULL,
    timesheet_name      VARCHAR(50) NOT NULL,
    date_from           TIMESTAMP NOT NULL,
    date_to             TIMESTAMP NOT NULL,
    deleted             TINYINT(1)
    PRIMARY KEY (id)
);

INSERT INTO `time_2_invoice` ( `id`, `timesheet_name`, `date_from`, `date_to` ) VALUES ( 1, 'week ending 17/10/2021', '2021-10-11', '2021-10-17' );
